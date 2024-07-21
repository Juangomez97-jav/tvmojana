<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Servicio::all(), 200); // Mostrar todos los servicios
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar datos
        $datos = $request->validate([
            "nombre" => ["required", "string", "max:100"],
            "descripcion" => ["nullable", "string", "max:255"],
            "precio" => ["required", "integer","min:1000"],
            "stock" => ["required", "integer", "min:1"]
        ]);

        // Guardar datos
        $servicio = Servicio::create($datos);

        // Respuesta al usuario
        return response()->json([
            "success" => true,
            "message" => "servicio creado exitosamente",
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        return response() -> json($servicio, 200); //Mostar un servicio
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        // Validar datos
        $datos = $request->validate([
            "nombre" => ["required", "string", "max:100"],
            "descripcion" => ["nullable", "string", "max:255"],
            "precio" => ["required", "integer","min:1000"],
            "stock" => ["required", "integer", "min:1"]
        ]);

        // actualizar datos
        $servicio -> update($datos);

        // Respuesta al usuario
        return response()->json([
            "success" => true,
            "message" => "servicio actualizado exitosamente",
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        //Eliminar servicio
        $servicio->delete();

        //Respuesta al usuario
        return response()->json([
            "success" => true,
            "message" => "servicio eliminado exitosamente",
        ], 204);
    }
}
