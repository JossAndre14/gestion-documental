<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\ModeloFuncionario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

    class UsuarioFuncionarioController extends Controller
    {
        public function login(Request $request)
            {
                $request->validate([
                    'dni' => 'required|numeric',
                    'password' => 'required|string',
            ]);

                $funcionario = ModeloFuncionario::where('dni', $request->dni)->first();

                if (!$funcionario || !Hash::check($request->password, $funcionario->contrasena)) {
                    return back()->withErrors(['credentials' => 'Credenciales incorrectas.']);
                }                
                
                
                // Guarda el funcionario en la sesión
                session(['Modelofuncionario' => $funcionario]);
                return redirect()->route('dashboard');
            }   



    public function registrar(Request $request)
            {
                // Validar los campos del formulario
                $request->validate([
                    'dni' => 'required|unique:usuariosfuncionarios|max:20',
                    'nombre_completo' => 'required|max:100',
                    'cargo' => 'nullable|max:50',
                    'area' => 'nullable|max:50',
                    'contrasena' => 'required|min:8',
                    'correo_electronico' => 'required|email|unique:usuariosfuncionarios|max:100',
                    'rol' => 'nullable|max:20',
                ]);

                // Crear un nuevo funcionario
                $funcionario = new ModeloFuncionario();
                $funcionario->dni = $request->dni;
                $funcionario->nombre_completo = $request->nombre_completo;
                $funcionario->cargo = $request->cargo;
                $funcionario->area = $request->area;
                $funcionario->contrasena = bcrypt($request->contrasena);
                $funcionario->correo_electronico = $request->correo_electronico;
                $funcionario->rol = $request->rol;
                $funcionario->fecha_creacion = now();
                $funcionario->save();

                return redirect()->route('funcionario.login')->with('success', 'Registro exitoso. Puedes iniciar sesión.');    
            }


    public function dashboard()
                {
                    // Recuperar la información del funcionario de la sesión
                    $funcionario = session('funcionario');

                    return view('auth.Dashboard', compact('funcionario')); 
                }

    public function logout()
                {
                    // Cerrar sesión y eliminar los datos del funcionario
                    session()->forget('funcionario');
                    
                    // Redirigir a la página de inicio de sesión
                    return redirect('/auth/login'); // Asegúrate de que esta ruta exista
                }
            }
