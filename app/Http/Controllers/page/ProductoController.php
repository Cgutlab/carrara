<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Producto;
use App\Familia;
use App\Galeria;

class ProductoController extends Controller
{
    public function index()
    {
    	$metadato = Metadato::where('section', 'producto')->first();
    	$active = 'producto';
    	$familias = Familia::orderBy('order', 'ASC')->get();
    	return view('page.familia',compact('metadato', 'active', 'familias'));
    }

    public function productos($id)
    {
    	$metadato = Metadato::where('section', 'producto')->first();
    	$active = 'producto';
    	$productos = Producto::where('family_id', $id)->orderBy('order', 'ASC')->get();
        $familias = Familia::orderBy('order', 'ASC')->get();
    	$familia = Familia::find($id);
    	return view('page.productos',compact('metadato', 'active', 'productos', 'familia', 'familias'));
    }

    public function producto($id)
    {
        $metadato = Metadato::where('section', 'producto')->first();
        $active = 'producto';
        $producto = Producto::find($id);
        $ready  = 0;
        $familias = Familia::orderBy('order', 'ASC')->get();
        $galerias = Galeria::where('product_id', $id)->orderBy('order', 'ASC')->get();
        return view('page.producto',compact('metadato', 'active', 'producto', 'galerias', 'familias', 'ready'));
    }
}
