<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Mail\Presupuesto;
use App\Metadato;
use App\Dato;

class PresupuestoController extends Controller
{
	public function index()
    {
    	$metadato = Metadato::where('section','presupuesto')->first();
		$active = 'presupuesto';
    	return view('page.presupuesto',compact('metadato','active'));
	}
 	
 	public function enviarMail(Request $request)
    {
    	$dato = Dato::where('type', 'email')->first();
        $nombre = $request->input('nombre');
        $localidad = $request->input('localidad');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $mensaje = $request->input('mensaje');

        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $file_save = Helpers::saveImage($request->file('archivo'), 'adjuntos');
        $file_save ? $datos['archivo'] = $file_save : false;

        Mail::to('franco.gib11@gmail.com')->send(new Presupuesto($nombre, $localidad, $email, $telefono, $mensaje, $file_save));

        if (count(Mail::failures()) > 0)
        {
            $success = 'Ha ocurrido un error al enviar el presupuesto';
        }
        else
        {

          $success = 'Su presupuesto se ha enviado correctamente';
        }

        return back()->with('success', $success);
    }   
}
