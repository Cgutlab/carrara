<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Familia;
use App\Slider;
use App\Texto;

class HomeController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'home')->orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section', 'home')->first();
    	$destacados = Familia::orderBy('order', 'ASC')->get();
        $texto2 = Texto::where('section', 'home2')->first();
        $texto = Texto::where('section', 'home')->first();
    	$active = 'home';
    	return view('page.home',compact('sliders', 'metadato', 'active', 'texto', 'texto2', 'destacados'));
    }
}
