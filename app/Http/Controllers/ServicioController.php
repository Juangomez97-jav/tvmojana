<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Empresa;
use App\Models\Empleado;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::orderBy('nombre')->get();
        return view('servicios.index', ['servicios' => $servicios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::orderBy('nombre')->get();
        $empleados = Empleado::orderBy('nombres')->get();
        //si no existen empresas, redirigir a la vista de creación de empresas
        if ($empresas->isEmpty()) {
            return redirect()->route('empresas.create')->with('info', 'Primero debes crear una empresa');
        }
        return view('servicios.create', ['empresas' => $empresas],['empleados' => $empleados]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Servicio::create($request->all());
        return redirect()->route('servicios.index')->with('info', 'Servicio creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicio $servicio)
    {
        $empresas = Empresa::all();
        $empleados = Empleado::all();
        return view('servicios.edit',['servicio' => $servicio, 'empresas' => $empresas, 'empleados' => $empleados]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        $servicio->update($request->all());
        return redirect()->route('servicios.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('servicios.index');
    }
}
