<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function __construct()
    {
        //Sólo los usuarios autenticados y rol admin pueden acceder a todas las rutas de este controlador
        //los usuarios autenticados y rol diferente de admin pueden acceder únicamente a la ruta index de este controlador
        $this->middleware('auth');
        $this->middleware('admin')->except('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();  //Se consultan todas las empresas
        return view('empresas.index', ['empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Empresa::create($request->all());
        return to_route('empresas.index')
        ->with('info', 'Empresa creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        return view('empresas.edit', ['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->update($request->all());
        return to_route('empresas.index')
        ->with('info', 'Empresa actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return to_route('empresas.index')
        ->with('info', 'Empresa eliminada con éxito');
    }
}
