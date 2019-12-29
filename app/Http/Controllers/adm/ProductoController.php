<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use App\Subfamilia;
use App\Producto;
use App\Familia;
use App\Galeria;
use Redirect;

class ProductoController extends Controller
{

	/* --------- Familia --------- */

    public function createFamilia()
    {
        $usuario = Auth::user();
        $familias_seccion = 'active';
        $familias_create = 'active';
        return view('adm.producto.crearFamilia', compact('usuario', 'familias_seccion', 'familias_create'));
    }

    public function storeFamilia(Request $request)
    {

        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'familias');
        $file_save ? $datos['image'] = $file_save : false;

        $familia = Familia::create($datos);
        $success = 'Familia creada correctamente';
        return Redirect::to('adm/producto/familia/show')->with('success', $success);
    }

    public function showFamilia()
    {
        $familias = Familia::orderBy('order','ASC')->get();
        $usuario = Auth::user();
        $familias_seccion = 'active';
        $familias_edit = 'active';
        return view('adm.producto.editarFamilias', compact('familias','usuario','familias_seccion','familias_edit'));
    }

    public function editFamilia($id)
    {
        $familia = Familia::find($id);
        $usuario = Auth::user();
        $familias_seccion = 'active';
        $familias_edit = 'active';
        return view('adm.producto.editarFamilia', compact('familia','usuario','familias_seccion','familias_edit'));
    }

    public function updateFamilia(Request $request, $id)
    {
    	$familia = Familia::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'familias');
        $file_save ? $datos['image'] = $file_save : false;
    
        $familia->fill($datos);
        $familia->save();
        $success = 'Familia editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyFamilia($id)
    {
        $familia = Familia::find($id);
        $familia->delete();
        $success = 'Familia eliminada correctamente';
        return Redirect::to('adm/producto/familia/show')->with('success', $success);
    }

    /* --------- Fin familia --------- */

    /* --------- Producto --------- */

    public function createProducto()
    {
        $usuario = Auth::user();
        $productos_seccion = 'active';
        $productos_create = 'active';
        $familias = Familia::orderBy('order','ASC')->get();
        $productos = Producto::orderBy('name', 'ASC')->pluck('name', 'id')->all();
        return view('adm.producto.crearProducto', compact('usuario', 'productos_seccion', 'productos_create', 'familias', 'productos', 'productos'));
    }

    public function storeProducto(Request $request)
    {

        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'productos');
        $file_save ? $datos['image'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('draw'), 'productos');
        $file_save ? $datos['draw'] = $file_save : false;

        $producto = Producto::create($datos);         
        $producto->productos()->sync($request->get('productos'));
        $success = 'Producto creado correctamente';
        return Redirect::to('adm/producto/create')->with('success', $success);
    }

    public function selectProducto()
    {
        $usuario = Auth::user();
        $familias_seccion = 'active';
        $familias_edit = 'active';
        $familias = Familia::orderBy('order','ASC')->get();
        return view('adm.producto.selectFamilias', compact('familias', 'usuario', 'familias_seccion', 'familias_edit'));
    }

    public function showProducto(Request $request)
    {
        $usuario = Auth::user();
        $familias_seccion = 'active';
        $familias_edit = 'active';
        $familia = Familia::find($request->family_id);
        $productos = Producto::where('family_id', $request->family_id)->orderBy('order','ASC')->get();
        return view('adm.producto.editarProductos', compact('familia','productos', 'usuario', 'familias_seccion', 'familias_edit'));
    }

    public function editProducto($id)
    {
        $usuario = Auth::user();
        $familias_seccion = 'active';
        $familias_edit = 'active';
        $producto = Producto::find($id);
        $familias = Familia::orderBy('order','ASC')->get();
        $productos = Producto::orderBy('name', 'ASC')->pluck('name', 'id')->all();
        return view('adm.producto.editarProducto', compact('producto', 'usuario', 'familias_seccion', 'familias_edit', 'familias', 'productos'));
    }

    public function updateProducto(Request $request, $id)
    {
    	$producto = Producto::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'productos');
        $file_save ? $datos['image'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('draw'), 'productos');
        $file_save ? $datos['draw'] = $file_save : false;
        
        $producto->fill($datos);
        $producto->save();
        $producto->productos()->sync($request->get('productos'));
        $success = 'Producto editado correctamente';
        return back()->with('success', $success);
    }

    public function destroyProducto($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        $success = 'Producto eliminado correctamente';
        return Redirect::to('adm/producto/select')->with('success', $success);
    }

    /* --------- Fin producto --------- */


    /* --------- Galería --------- */

    public function crearGaleria(){
        $usuario = Auth::user();
        $productos = Producto::orderBy('order','ASC')->get();
        $productos_seccion = 'active';
        $producto_create = 'active';
        return view('adm.producto.crearGaleria',  compact('usuario', 'productos_seccion', 'producto_create' , 'productos'));
    }

    public function storeGaleria(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'galeria');
        $file_save ? $datos['image'] = $file_save : false;

        Galeria::create($datos);
        $success = 'Imagen subida correctamente';

        return back()->with('success', $success);
    }

    public function Galerias($id)
    {   
        $usuario = Auth::user();
        $galerias = Galeria::where('product_id',$id)->get();
        $galerias_seccion = 'active';
        $galeria_edit = 'active';
        return view('adm.producto.editarGalerias', compact('usuario', 'trabajo', 'galerias', 'galerias_seccion', 'galeria_edit'));
    }

    public function Galeria($id)
    {
        $usuario = Auth::user();
        $galeria = Galeria::where('id',$id)->first();

        $galerias_seccion = 'active';
        $galeria_edit = 'active';

        return view('adm.producto.editarGaleria', compact('usuario', 'galeria', 'galerias_seccion', 'galeria_edit'));
    }

    public function updateGaleria(Request $request, $id)
    {
        $galeria = Galeria::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'galeria');
        $file_save ? $datos['image'] = $file_save : false;
    
        $galeria->fill($datos);
        $galeria->save();
        $success = 'Galeria editada correctamente';
        return Redirect::to('adm/producto/select')->with('success', $success);
    }

    public function destroyGaleria($id)
    {
        $galeria = Galeria::find($id);
        $galeria->delete();
        $success = 'Imagen eliminada correctamente';
        return back()->with('success', $success);
    }

    /* --------- fin galería --------- */
}
