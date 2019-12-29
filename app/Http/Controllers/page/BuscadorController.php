<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Producto;

class BuscadorController extends Controller
{
    public function index()
    {
        $busca=0;
    	$metadato = Metadato::where('section', 'buscador')->first();
    	$active = 'buscador';
    	$ancho = Producto::where('family_id', 1)->orderBy('order', 'ASC')->groupBy('width')->pluck('width', 'width')->all();
    	$alto = Producto::where('family_id', 1)->orderBy('order', 'ASC')->groupBy('height')->pluck('height', 'height')->all();
    	$profundidad = Producto::where('family_id', 1)->orderBy('order', 'ASC')->groupBy('depth')->pluck('depth', 'depth')->all();
    	$productos = Producto::orderBy('order', 'ASC')->get();
    	return view('page.buscador',compact('metadato', 'active', 'ancho', 'alto', 'productos', 'profundidad', 'busca'));
    }

    public function filtro(Request $request)
    {
        $busca=1;
    	$active = 'buscador';
    	$ancho = Producto::where('family_id', 1)->orderBy('order', 'ASC')->groupBy('width')->pluck('width', 'width')->all();
    	$alto = Producto::where('family_id', 1)->orderBy('order', 'ASC')->groupBy('height')->pluck('height', 'height')->all();
    	$profundidad = Producto::where('family_id', 1)->orderBy('order', 'ASC')->groupBy('depth')->pluck('depth', 'depth')->all();
    	$metadato = Metadato::where('section', 'buscador')->first();
    	if($request->input('ancho')!='ancho' && $request->input('ancho')!='')
        {
            $consultas = Producto::where('width', $request->input('ancho'))->get();
            $buscar = 1;
        }
        elseif($request->input('alto')!='alto' && $request->input('alto')!='')
        {
            $consultas = Producto::where('height', $request->input('alto'))->get();
            $buscar = 2;
        }
        elseif($request->input('profundidad')!='profundidad' && $request->input('profundidad')!='')
        {
        	$consultas = Producto::where('depth', $request->input('profundidad'))->get();
            $buscar = 3;
        }
    	return view('page.buscador', compact('active', 'consultas', 'metadato', 'busca', 'ancho', 'alto', 'profundidad'));
    }
}

