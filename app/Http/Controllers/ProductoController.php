<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $categoria = $request->input('categoria');

        $productos = Producto::all()->filter(function ($producto) use ($categoria) {
            $imagenBase = pathinfo($producto->imagen, PATHINFO_FILENAME);
            $mapaCategorias = [
                'producto1' => 'Iluminación',
                'producto2' => 'Adhesivos',
                'producto3' => 'Adhesivos',
                'producto4' => 'Seguridad',
                'producto5' => 'Protección del hogar',
                'producto6' => 'Protección del hogar',
                'producto7' => 'Protección del hogar',
                'producto8' => 'Protección del hogar',
                'producto9' => 'Herramientas',
                'producto10' => 'Seguridad',
            ];

            $categoriaProducto = $mapaCategorias[$imagenBase] ?? null;

            return !$categoria || $categoriaProducto === $categoria;
        });


        $categorias = collect([
            'Iluminación',
            'Adhesivos',
            'Seguridad',
            'Protección del hogar',
            'Herramientas',
        ]);

        return view('productos.index', compact('productos', 'categorias', 'categoria'));
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
