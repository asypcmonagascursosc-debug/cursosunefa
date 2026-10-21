<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    protected $table = 'inscritos';
     protected $fillable = [
        'estudiante_id',
        'curso_id',
       
    ];
}
