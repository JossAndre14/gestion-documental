<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('id_funcionario'); // ID como clave primaria
            $table->string('dni')->unique(); // DNI único para cada funcionario
            $table->string('nombrecompleto'); // Nombre completo del funcionario
            $table->string('cargo'); // Cargo del funcionario
            $table->string('area'); // Área donde trabaja el funcionario
            $table->string('password'); // Contraseña del funcionario (encriptada)
            $table->string('correoeletronico')->unique(); // Correo electrónico del funcionario
            $table->string('rol'); // Rol del funcionario (ej. Administrador, Usuario)
            $table->timestamp('fecha_creacion')->useCurrent(); // Fecha de inscripción o creación del funcionario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
