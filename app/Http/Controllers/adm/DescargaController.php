<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Descarga;
use Redirect;

class DescargaController extends Controller
{
    public function index()
    {
        $descargas = Descarga::orderBy('order','ASC')->paginate(8);
        $usuario = Auth::user();
        $descargas_seccion = 'active';
        $descargas_edit = 'active';
        return view('adm.descarga.editarDescargas', compact('descargas', 'usuario', 'descargas_seccion', 'descargas_edit'));
    }

    public function create()
    {
        $usuario = Auth::user();
        $descargas_seccion = 'active';
        $descargas_create = 'active';
        return view('adm.descarga.crearDescarga', compact('descargas', 'usuario', 'descargas_seccion', 'descargas_create')); 
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'descarga');
        $file_save ? $datos['image'] = $file_save : false;

        Descarga::create($datos);
        $success = 'Descarga creada correctamente';
        return Redirect::to('adm/descargas/create')->with('success', $success);        
    }

    public function edit($id)
    {
        $descarga = Descarga::find($id);
        $usuario = Auth::user();
        $descargas_seccion = 'active';
        $descargas_edit = 'active';
        return view('adm.descarga.editardescarga', compact('descarga', 'usuario', 'descargas_seccion', 'descargas_edit'));      
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $descarga = Descarga::find($id);

        $file_save = Helpers::saveImage($request->file('image'), 'descarga');
        $file_save ? $datos['image'] = $file_save : false;

        $descarga->fill($datos);
        $descarga->save();
        $success = 'Descarga editada correctamente';
        return Redirect::to('adm/descargas')->with('success', $success);        
    }

    public function destroy($id)
    {
        $descarga = Descarga::find($id);
        $descarga->delete();
        $success = 'Descarga eliminada correctamente';
        return Redirect::to('adm/descargas')->with('success', $success);        
    }
}
