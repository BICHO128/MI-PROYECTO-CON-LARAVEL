<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class ApiProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all(); // obtener todos los productos
        return response()->json($productos, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Crear un nuevo producto
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:20',
            'precio' => 'nullable|numeric',
            'stock' => 'nullable|integer',
        ]);

        $productos = Producto::create($validated);
        return response()->json($productos, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id); // busca el producto con el id especifico

        if ($producto) {
            return response()->json($producto, 200);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            $producto->update($request->all());
            return response()->json($producto, 200);
        } else {
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $producto->delete();
        return response()->json(['message' => 'Producto eliminado'], 200);
    }
}
