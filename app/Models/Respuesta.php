<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'idP1', 'idP2', 'idP3', 'idP4', 'idP5', 'idP6', 'idP7', 'idP8', 'idP9', 'idP10', 'carrera_sugerida'
    ];
}
