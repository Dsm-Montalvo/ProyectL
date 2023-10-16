<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table= 'alumnos';
    protected $primaryKey = 'id_alumno';
    protected $fillable = [
        'Nombre_alumno',
        'App',
        'Apm',
        'Fecha_de_nacimiento',
        'Genero',
        'Matricula',
        'Direccion',
        'Email',
        'Contraseña',
        'Foto',
        'Id_grupo',
    ];
}
