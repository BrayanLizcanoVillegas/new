<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'direccion', 'telefono', 'correo', 'servicio'
    ];
}
