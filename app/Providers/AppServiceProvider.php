<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Dato;
use App\Logo;
use App\Red;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $hredes = Red::where('section','header')->orderBy('order','ASC')->get();
        $fredes = Red::where('section','footer')->orderBy('order','ASC')->get();
        $correo = Dato::where('type', 'correo')->first();
        $logoh = Logo::where('section','header')->first();
        $logof = Logo::where('section','footer')->first();
        $telefono = Dato::where('type', 'telefono')->first();
        $ubicacion = Dato::where('type', 'ubicacion')->first();
        $mapa = Dato::where('type', 'mapa')->first();

        view()->share(compact('correo','ubicacion','telefono','mapa','logof','logoh','hredes','fredes'));
    }

    public function register()
    {
        //
    }
}
