<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
    	'image', 'order', 'product_id',
    ];

    public function producto() {
        return $this->Belongsto('App\Producto','producto_id');
    }
}
