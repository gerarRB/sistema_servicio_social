<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    use HasFactory;

    protected $table = 'coordinaciones'; // Nombre de la tabla

    protected $fillable = [
        'nombre_coordinacion',
    ];

    
}
