<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Catalogo;
use App\Slider;

class CatalogoController extends Controller
{
    public function index()
    {
    	$metadato = Metadato::where('section','catalogo')->first();
    	$catalogos = Catalogo::orderBy('order', 'ASC')->get();
    	$active = 'catalogo';
    	return view('page.catalogo',compact('metadato', 'active', 'catalogos'));
    }
}

