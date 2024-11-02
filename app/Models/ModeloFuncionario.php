<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModeloFuncionario extends Model
{
    protected $table = 'usuariosfuncionarios';
    protected $primaryKey = 'id_funcionario';

    // Definir los campos que pueden ser asignados en masa
    protected $fillable = [
        'dni',
        'nombre_completo',
        'cargo',
        'area',
        'contrasena',
        'correo_electronico',
        'rol',
        'fecha_creacion',
    ];
}
