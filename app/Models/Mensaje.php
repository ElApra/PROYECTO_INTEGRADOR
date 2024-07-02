<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = [
        'asunto',
        'contenido',
        'remitente_id',
    ];

   
}
