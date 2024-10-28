<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Cliente;
use App\Models\Servicio;
use App\Models\Empresa;
use App\Models\Estado;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::orderBy('nombre_estado')->get();
        $servicios = Servicio::orderBy('nombre')->get();
        $clientes = Cliente::orderBy('nombres')->get();
        $empresas = Empresa::orderBy('nombre')->get();
        $facturas = Factura::orderBy('nombre')->get();
        return view('facturas.index', ['facturas' => $facturas,'clientes'=>$clientes,'servicios'=>$servicios,'empresas'=>$empresas,'estados'=>$estados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = Estado::orderBy('nombre_estado')->get();
        $clientes = Cliente::orderBy('nombres')->get();
        $servicios = Servicio::orderBy('nombre')->get();
        $empresas = Empresa::orderBy('nombre')->get();
        return view('facturas.create',['clientes'=>$clientes,'servicios' => $servicios, 'empresas'=>$empresas,'estados'=>$estados]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Factura::create($request->all());
        return redirect()->route('facturas.index')->with('info', 'factura creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
