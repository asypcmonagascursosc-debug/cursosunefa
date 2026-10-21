<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = [
        'id',
        'nacionalidad',
    'cedula',
    'nombre',
    'apellido',
   'email',
    'telefono',
    'municipio',
    'parroquia',
    'direccion',
   ];
    
}
