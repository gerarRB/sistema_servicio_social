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
        Schema::create('detalles_proyectos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('proyecto_id')
                  ->constrained('proyectos')
                  ->onDelete('cascade');

            $table->foreignId('estudiante_id')
                  ->constrained('estudiantes')
                  ->onDelete('cascade');

            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('validacion_institucion');
            $table->boolean('validacion_carrera');
            $table->string('estado', 50);
                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_proyectos');
    }
};
