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
            $table->bigIncrements('id_alumno');
            $table->string('Nombre_alumno',50);
            $table->string('App',50);
            $table->string('Apm',50)->nullable();
            $table->date('Fecha_de_nacimiento');
            $table->string('Genero',50);
            $table->integer('Matricula',);
            $table->string('Direccion',50);
            $table->string('Email',50);
            $table->string('Contraseña',50);
            $table->string('Foto')->nullable();
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
