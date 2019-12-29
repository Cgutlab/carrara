<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
       'name', 'keyword', 'descripcion', 'order', 'image', 'draw', 'width', 'height', 'depth', 'capacity', 'bomb', 'jet', 'regulator', 'soup', 'switch', 'family_id',
    ];

    public function familia() {
        return $this->Belongsto('App\Familia','family_id');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'producto_producto', 'producto_id', 'producto2_id');
    }
}
