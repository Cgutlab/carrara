<?php

namespace App\Http\Controllers\page;

use App\Http\Requests\ClienteRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Metadato;
use App\Descarga;
use App\Cliente;

class ZonaPrivadaController extends Controller
{

    public function store(ClienteRequest $request){

        $cliente = DB::table('clientes')->where('usuario', $request->input('usuario'))->first();
        if(isset($cliente))
        {
            if($cliente->clave == $request->input('clave'))
            {
                session(['cliente' => $cliente->id]);
                session(['nombre' => $cliente->nombre]);
                session(['activo' => $cliente->active]);
                return redirect('descargas');
            }
            else
            {
                $error = "El usuario y/o contraseña son invalidos";
                return back()->with('error');
            }
        }
        else
        {
            $error = "El usuario y/o contraseña son invalidos";
            return back()->with('error');
        }
    }

    public function registroStore(Request $request)
    {

        $datos = $request->all();
        Cliente::create($datos);
        $success = 'Usuario creado correctamente';
        return back()->with('success', $success);
    }

    public function descarga()
    {
        $value = session()->get('cliente');

        if(session('activo') == 0)
        {
            return redirect('/');
        }
        else
        {
        $metadato = Metadato::where('section','descarga')->first();
    	$active = 'descarga';
        $descargas = Descarga::orderBy('order', 'ASC')->get();
    	return view('zonaprivada.descargas', compact('metadato', 'active', 'descargas'));
        }   
    }

    public function registroCreate()
    {
        $active = 'registro';
        return view('page.registro', compact('usuario', 'active'));
    }

    public function logout()
    {
        session()->forget('cliente');
        return redirect('/');
    }
}
