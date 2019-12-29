<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Cliente;
use Redirect;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('orden','ASC')->get();
        $usuario = Auth::user();
        $clientes_seccion = 'active';
        $clientes_edit = 'active';
        return view('adm.cliente.editarClientes', compact('clientes', 'usuario', 'clientes_seccion', 'clientes_edit'));
    }

    public function create()
    {
        $usuario = Auth::user();
        $clientes_seccion = 'active';
        $clientes_create = 'active';
        return view('adm.cliente.crearCliente', compact('clientes', 'usuario', 'clientes_seccion', 'clientes_create')); 
    }

    public function store(Request $request)
    {
        $datos = $request->all();
        Cliente::create($datos);
        $success = 'Cliente creado correctamente';
        return Redirect::to('adm/clientes/create')->with('success', $success);        
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        $usuario = Auth::user();
        $clientes_seccion = 'active';
        $clientes_edit = 'active';
        return view('adm.cliente.editarCliente', compact('cliente', 'usuario', 'clientes_seccion', 'clientes_edit'));      
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $datos = $request->all();
        $cliente->fill($datos);
        $cliente->save();
        $success = 'Cliente editado correctamente';
        return Redirect::to('adm/clientes')->with('success', $success);        
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        $success = 'Cliente eliminado correctamente';
        return Redirect::to('adm/clientes')->with('success', $success);        
    }
}
