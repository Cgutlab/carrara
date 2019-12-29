<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Empresa;
use App\Slider;

class EmpresaController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section','empresa')->orderBy('order','ASC')->get();
    	$metadato = Metadato::where('section','empresa')->first();
    	$active = 'empresa';
    	$empresa = Empresa::find(1);
    	return view('page.empresa',compact('sliders', 'metadato', 'active', 'empresa'));
    }
}

