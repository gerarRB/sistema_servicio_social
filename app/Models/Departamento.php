<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamentos'; // Especifica el nombre de la tabla

    protected $fillable = [
        'nombre_departamento', // Nombre del departamento
    ];

    // Relación con municipios (un departamento tiene muchos municipios)
    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'id_departamento');
    } 
}


