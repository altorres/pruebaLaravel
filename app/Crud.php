<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'telefono','correo','direccion',
    ];
}
