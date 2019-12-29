<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Catalogo;
use Redirect;

class CatalogoController extends Controller
{
    public function index()
    {
        $catalogos = Catalogo::orderBy('order','ASC')->paginate(8);
        $usuario = Auth::user();
        $catalogos_seccion = 'active';
        $catalogos_edit = 'active';
        return view('adm.catalogo.editarCatalogos', compact('catalogos', 'usuario', 'catalogos_seccion', 'catalogos_edit'));
    }

    public function create()
    {
        $usuario = Auth::user();
        $catalogos_seccion = 'active';
        $catalogos_create = 'active';
        return view('adm.catalogo.crearCatalogo', compact('catalogos', 'usuario', 'catalogos_seccion', 'catalogos_create')); 
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'catalogo');
        $file_save ? $datos['image'] = $file_save : false;

        Catalogo::create($datos);
        $success = 'Catálogo creado correctamente';
        return Redirect::to('adm/catalogos/create')->with('success', $success);        
    }

    public function edit($id)
    {
        $catalogo = Catalogo::find($id);
        $usuario = Auth::user();
        $catalogos_seccion = 'active';
        $catalogos_edit = 'active';
        return view('adm.catalogo.editarCatalogo', compact('catalogo', 'usuario', 'catalogos_seccion', 'catalogos_edit'));      
    }

    public function update(Request $request, $id)
    {
        $catalogo = Catalogo::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'catalogo');
        $file_save ? $datos['image'] = $file_save : false;

        $catalogo->fill($datos);
        $catalogo->save();
        $success = 'Catálogo editado correctamente';
        return Redirect::to('adm/catalogos')->with('success', $success);        
    }

    public function destroy($id)
    {
        $catalogo = Catalogo::find($id);
        $catalogo->delete();
        $success = 'Catálogo eliminado correctamente';
        return Redirect::to('adm/catalogos')->with('success', $success);        
    }
}
