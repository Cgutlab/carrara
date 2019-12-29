<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Metadato;
use App\Producto;
use App\Familia;
use App\Marca;

class BuscarController extends Controller
{
    public function index() {
        $busca=0;
    	$metadato = Metadato::where('section','buscar')->first();
    	$active = 'buscar';
        return view('page.buscar', compact('metadato','active','busca'));
    }

    public function getResults (Request $request) {

        $busqueda = $request->busqueda;
        $busca=1;
        $active = 'buscar';
        $metadato = Metadato::where('section','buscar')->first();
        $productos = Producto::where('name', 'like', '%' . $busqueda . '%')->orwhere('descripcion', 'like', '%' . $busqueda . '%')->get();
        return view('page.buscar', compact('productos', 'busqueda', 'busca', 'metadato', 'active'));
    }
}
