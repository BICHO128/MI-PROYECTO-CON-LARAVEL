<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiProductoController;
use App\Http\Controllers\Api\AuthController;



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


// taller 7


// 🔓 Rutas públicas (registro y login)
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// 🔐 Rutas protegidas por JWT
Route::middleware(['auth:api'])->group(function () {
  Route::post('logout', [AuthController::class, 'logout']);
  Route::post('refresh', [AuthController::class, 'refresh']);

  // Rutas protegidas de categorías
  Route::apiResource('categorias', ApiCategoriaController::class);
});

/*
# Tabla de rutas

  | Método | URI             | Acción            | Requiere Token |
| ------ | --------------- | ----------------- | -------------- |
| POST   | /api/register   | Registrar usuario | ❌ No           |
| POST   | /api/login      | Iniciar sesión    | ❌ No           |
| POST   | /api/logout     | Cerrar sesión     | ✅ Sí           |
| CRUD   | /api/categorias | API de categorías | ✅ Sí           |

 */
