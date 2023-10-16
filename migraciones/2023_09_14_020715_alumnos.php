<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre_alumno');
            $table->date('Fecha de nacimiento');
            $table->string('Genero');
            $table->integer('Matricula');
            $table->string('Direccion');
            $table->string('Email');
            $table->string('Password');
            $table->string('Foto');
            /* $table->unsignedBigInteger('Id_grupo1');
            $table->foreign('Id_grupo1')->references('Id_grupo')->on('grupos'); */
             $table->foreignId('Id_grupo')->nullable()->constrained('grupos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
