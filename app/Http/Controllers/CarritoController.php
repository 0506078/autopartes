<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    // MOSTRAR CARRITO
    public function index()
    {
        $productos = session()->get('carrito', []);
        return view('carrito.index', compact('productos'));
    }

    // AGREGAR PRODUCTO AL CARRITO
    public function agregarProducto(Request $request)
    {
        $producto_id = $request->input('producto_id');

        // Simulación de base de datos (reemplaza por DB real si la usas)
        $productosDisponibles = [
            1 => ['id' => 1, 'nombre' => 'Filtro de Aceite', 'descripcion' => 'Filtro de alta calidad.', 'precio' => 200, 'imagen' => 'filtro.jpg'],
            2 => ['id' => 2, 'nombre' => 'Batería 12V', 'descripcion' => 'Batería para autos estándar.', 'precio' => 1500, 'imagen' => 'bateria.jpg'],
            3 => ['id' => 3, 'nombre' => 'Llanta 16"', 'descripcion' => 'Llanta para autos compactos.', 'precio' => 2200, 'imagen' => 'llanta.jpg'],
        ];

        if (isset($productosDisponibles[$producto_id])) {
            $carrito = session()->get('carrito', []);
            $carrito[] = $productosDisponibles[$producto_id];
            session()->put('carrito', $carrito);

            return redirect()->route('carrito')->with('mensaje', 'Producto agregado al carrito.');
        } else {
            return redirect()->back()->with('mensaje', 'Producto no encontrado.');
        }
    }

    // ELIMINAR PRODUCTO
    public function eliminar($id)
    {
        $carrito = session()->get('carrito', []);
        $carrito = array_filter($carrito, function ($producto) use ($id) {
            return $producto['id'] != $id;
        });

        session()->put('carrito', $carrito);

        return redirect()->back()->with('mensaje', 'Producto eliminado del carrito.');
    }
}
