<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiProductoController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/productos', controller: App\Http\Controllers\ApiProductoController::class); esto funciona con php 8.0 en adelante

// Route::get('/productos', [App\Http\Controllers\ApiProductoController::class, 'index']);

Route::apiResource('productos', ApiProductoController::class);

// ruta categorias
Route::apiResource('categorias', ApiCategoriaController::class);


