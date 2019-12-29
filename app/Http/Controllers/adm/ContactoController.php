<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Texto;
use Redirect;

class ContactoController extends Controller
{
     public function edit(){
        $usuario = Auth::user();
        $termino = Texto::where('section', 'contacto')->first();
        $contactos_seccion = 'active';
        $contactos_edit = 'active';

        return view('adm.contacto.editarContenido',  compact('usuario', 'termino', 'seccion', 'contactos_seccion', 'contactos_edit'));
    }

    public function update(Request $request, $id){
        $datos = $request->all();
        $termino = Texto::where('section', 'contacto')->first();
        $termino->fill($datos);
        $termino->save();
        $success = 'Términos y condiciones editados correctamente';
        return back()->with('success', $success);
    }

}
