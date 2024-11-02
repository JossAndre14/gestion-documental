<?php

use App\Http\Controllers\UsuarioFuncionarioController;
use Illuminate\Support\Facades\Route;

// Ruta principal - página de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Rutas para el login y el dashboard del funcionario
Route::prefix('auth')->group(function () {
    // Mostrar formulario de login
    Route::get('/login', function () {
        return view('auth.UsuarioFuncionario');
    })->name('funcionario.login');

    // Procesar el login
    Route::post('/login', [UsuarioFuncionarioController::class, 'login'])
        ->name('funcionario.auth');
    
    // Resgistro por el momento
    Route::get('/registro', function () {
        return view('auth.registro');
    })->name('funcionario.registro');
    
    // Procesar el registro
    Route::post('/registro', [UsuarioFuncionarioController::class, 'registrar']) 
        ->name('funcionario.register');

    // Dashboard (protegido por auth)
    Route::get('/dashboard', [UsuarioFuncionarioController::class, 'dashboard'])
        ->name('dashboard')
        ;
   
    // Logout
    Route::post('/logout', [UsuarioFuncionarioController::class, 'logout'])
        ->name('logout');

});