<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        try {
            $productos = Producto::orderBy('created_at', 'desc')->get();
           
            return view('products', compact('productos'));
        } catch (\Exception $e) {
            \Log::error("Error al obtener productos: " . $e->getMessage());
            return view('products')->with('productos', collect());
        }
    }
    public function show($id)
{
    $producto = Producto::findOrFail($id); // Si no existe, lanza 404 automáticamente
    return view('producto_detalle', compact('producto'));
}

}