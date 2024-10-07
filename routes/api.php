<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource("v1/servicio",App\Http\Controllers\Api\v1\ServicioController::class);

Route::apiResource("v2/cliente",App\Http\Controllers\Api\v2\ClienteController::class);

//Ruta login para obtener el token
Route::post('v2/login', [AuthController::class, 'login']);