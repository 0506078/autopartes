<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    private $productos = [
        ['id' => 1, 'nombre' => 'Filtro de Aceite', 'descripcion' => 'Filtro de alta calidad.', 'precio' => 200, 'imagen' => 'filtro.jpg'],
        ['id' => 2, 'nombre' => 'Batería 12V', 'descripcion' => 'Batería para autos estándar.', 'precio' => 1500, 'imagen' => 'bateria.jpg'],
        ['id' => 3, 'nombre' => 'Llanta 16"', 'descripcion' => 'Llanta para autos compactos.', 'precio' => 2200, 'imagen' => 'llanta.jpg'],
    ];

 
    public function inicio() {
        return view('inicio', ['productos' => $this->productos]);
    }

    // Página de productos
    public function productos() {
        return view('productos', ['productos' => $this->productos]);
    }

    // Detalle del producto
    public function detalleProducto($id) {
        $producto = collect($this->productos)->firstWhere('id', $id);
        return view('producto-detalle', ['producto' => $producto]);
    }

    
    public function carrito() {
        
        $productosCarrito = session()->get('carrito', []);
        
        // Verificar si el carrito está vacío
        if (empty($productosCarrito)) {
            return view('carrito', ['mensaje' => 'El carrito está vacío']);
        }

        return view('carrito', ['productos' => $productosCarrito]);
    }

    
    public function agregarProducto(Request $request) {
        
        $productoId = $request->input('producto_id');
        
        
        $producto = collect($this->productos)->firstWhere('id', $productoId);

        
        if (!$producto) {
            return redirect()->route('productos')->with('error', 'Producto no encontrado');
        }

        
        $carrito = session()->get('carrito', []);
        $carrito[] = $producto;  

       
        session()->put('carrito', $carrito);

     
        return redirect()->route('carrito');
    }


    public function pago() {
        return view('pago');
    }

    public function confirmacion() {
        return view('confirmacion');
    }

    public function contacto() {
        return view('contacto');
    }

    public function politicas() {
        return view('politicas');
    }

    
    public function ayuda() {
        return view('ayuda');
    }

    
    public function comoRealizarPedido() {
        return view('guia.como-realizar-pedido');
    }

    public function comoRastrearEnvio() {
        return view('guia.como-rastrear-envio');
    }

    public function comoCambiarProducto() {
        return view('guia.como-cambiar-producto');
    }

    public function contactarServicioCliente() {
        return view('guia.contactar-servicio-cliente');
    }
}
