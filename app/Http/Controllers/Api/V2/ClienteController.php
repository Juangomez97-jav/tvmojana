<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        //Sólo los usuarios autenticados y rol admin pueden acceder a todas las rutas de este controlador
        //los usuarios autenticados y rol diferente de admin pueden acceder únicamente a la ruta index de este controlador
        $this->middleware('auth:sanctum'); //Tipo de autenticación: sanctum (token)
        $this->middleware('admin')->except('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Cliente::all(),200); //Mostrar todos los clientes
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar datos
        $datos=$request->validate([
        'nombres'=>['required','string','max:100'],
        'apellidos'=>['required','string','max:100'],
        'documento'=>['required','string','max:10'],
        'telefono'=>['required','string','max:10'],
        'barrio'=>['required','string','max:20'],
        'calle'=>['required','integer','max:3'],
        'poste'=>['required','integer','max:4'],
        'empresa_id'=>['required','integer','exists:empresas,id'],
        'servicio_id'=>['required','integer','exists:servicios,id'],
        ]);

        //Guardar datos
        $cliente = Cliente::create($datos);
        //respuesta al usuario
        return response()->json([
            'success'=>true,
            'message'=>'cliente creado exitosamente',
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
        return response()->json($cliente,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
         //validar datos
         $datos=$request->validate([
            'nombres'=>['required','string','max:100'],
            'apellidos'=>['required','string','max:100'],
            'documento'=>['required','string','max:10'],
            'telefono'=>['required','string','max:10'],
            'barrio'=>['required','string','max:20'],
            'calle'=>['required','integer','max:3'],
            'poste'=>['required','integer','max:4'],
            'empresa_id'=>['required','integer','exists:empresas,id'],
            'servicio_id'=>['required','integer','exists:servicios,id'],
            ]);
    
            //Actualizar datos
            $cliente->update($datos);
            //respuesta al usuario
            return response()->json([
                'success'=>true,
                'message'=>'cliente actualizado exitosamente',
            ],200);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //Eliminar cliente
        $cliente->delete();

        //Respuesta al usuario
        return response()->json([
            'success'=>true,
            'message'=>'cliente eliminado exitosamente',
        ],204);
    }
}
