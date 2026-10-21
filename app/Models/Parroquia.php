<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = 'parroquias';
    protected $fillable = [
        'id',
        'parroquia',
        'municipio_id',
      
    ];
}
