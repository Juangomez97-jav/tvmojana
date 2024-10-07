<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Empresa;
use Illuminate\Http\Request;
use DB;


class ClienteController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::orderBy('nombre')->get();
        $clientes = Cliente::orderBy('nombres')->get();
        return view('clientes.recaudo', ['clientes' => $clientes,'servicios'=>$servicios]); 
    }
     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicios = Servicio::orderBy('nombre')->get();
        //si no existen servicioss, redirigir a la vista de creación de servicios
        if ($servicios->isEmpty()) {
            return redirect()->route('servicios.create')->with('info', 'Primero debes crear un servicio');
        }
        return view('clientes.create', ['servicios' => $servicios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('info', 'cliente creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Reuest $request)
    {
        $servicios = Servicio::all();
        return view('clientes.edit', ['cliente' => $cliente, 'servicio' => $servicio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('info', 'Cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientess.index')->with('info', 'Cliente eliminado con éxito');
    }
}
