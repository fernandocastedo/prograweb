<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $categoria = $request->input('categoria');

        $productos = Producto::when($categoria, function ($query, $categoria) {
            return $query->where('categoria', $categoria);
        })->get();

        $categorias = Producto::select('categoria')->distinct()->pluck('categoria');

        return view('productos.index', compact('productos', 'categorias', 'categoria'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
