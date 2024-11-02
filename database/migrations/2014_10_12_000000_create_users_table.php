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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique(); // Campo para el DNI
            $table->string('name'); // Nombre del funcionario
            $table->string('email')->unique(); // Correo electrónico
            $table->string('password'); // Contraseña
            $table->string('cargo'); // Campo para el cargo
            $table->string('area'); // Campo para el área
            $table->string('rol'); // Campo para el rol
            $table->rememberToken(); // Para el "remember me"
            $table->timestamps(); // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
