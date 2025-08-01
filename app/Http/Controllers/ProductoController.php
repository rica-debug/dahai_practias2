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
    $producto = Producto::findOrFail($id);
    return view('producto_detalle', compact('producto'));
}
public function categoriaSolarModules()
{
    $productos = Producto::where('categoria', 'modulos_fotovoltaicos')->get();
    return view('categorias.solar-modules', compact('productos'));
}

public function categoriaInversores()
{
    $productos = Producto::where('categoria', 'inversor')->get();
    return view('categorias.inversores', compact('productos'));
}

public function categoriaBaterias()
{
    $productos = Producto::where('categoria', 'bateria')->get();
    return view('categorias.baterias', compact('productos'));
}

public function categoriaPilas()
{
    $productos = Producto::where('categoria', 'pila_de_carga')->get();
    return view('categorias.pilas', compact('productos'));
}


}