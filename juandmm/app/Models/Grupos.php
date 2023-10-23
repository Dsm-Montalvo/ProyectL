<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;

    protected $table= 'grupos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nombre',
        'Clave',
    ];
/*  relacion uno a muchos
    public function alumnos()
    {
        return $this->hasMany(Alumnos::class, 'Id_grupo','id');
    } */
}
