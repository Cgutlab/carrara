<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
    	'nombre', 'apellido', 'usuario', 'clave', 'telefono', 'correo', 'direccion', 'orden', 'active'
    ];
}
