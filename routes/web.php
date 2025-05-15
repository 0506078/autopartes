<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;


Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/productos', [PaginaController::class, 'productos'])->name('productos');
Route::get('/producto/{id}', [PaginaController::class, 'detalleProducto'])->name('producto.detalle');
Route::get('/carrito', [PaginaController::class, 'carrito'])->name('carrito');
Route::get('/pago', [PaginaController::class, 'pago'])->name('pago');
Route::get('/confirmacion', [PaginaController::class, 'confirmacion'])->name('confirmacion');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
Route::get('/politicas', [PaginaController::class, 'politicas'])->name('politicas');
Route::post('/agregarProducto', [PaginaController::class, 'agregarProducto'])->name('agregarProducto');


Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('registro');
Route::view('/cuenta', 'cuenta')->name('cuenta');


Route::view('/seguimiento', 'seguimiento')->name('seguimiento');
Route::view('/cupones', 'cupones')->name('cupones');
Route::view('/reseñas', 'reseñas')->name('reseñas');
Route::view('/faq', 'faq')->name('faq');
Route::view('/soporte', 'soporte')->name('soporte');
Route::view('/envios', 'envios')->name('envios');
Route::view('/seguridad', 'seguridad')->name('seguridad');

Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
Route::get('/pago', [PagoController::class, 'index'])->name('pago');
use App\Http\Controllers\CarritoController;

Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
use App\Http\Controllers\PagoController;

Route::get('/pago', [PagoController::class, 'index'])->name('pago');



Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');


Route::post('/realizar-pago', [PagoController::class, 'realizarPago'])->name('realizarPago');
Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');


Route::post('/realizar-pago', [PagoController::class, 'realizarPago'])->name('realizarPago');


Route::get('/pago/completado', function () {
    return "¡Pago realizado con éxito!"; 
})->name('pago.completado');


Route::get('pago', [PagoController::class, 'index'])->name('pago.index');
Route::post('pago/aplicar-cupon', [PagoController::class, 'aplicarCupon'])->name('pago.aplicarCupon');
Route::post('pago/realizar-pago', [PagoController::class, 'realizarPago'])->name('pago.realizarPago');
Route::get('pago/success', [PagoController::class, 'success'])->name('pago.success');

Route::get('/pago', [PagoController::class, 'index'])->name('pago');

Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');
Route::post('/pago/realizar', [PagoController::class, 'realizarPago'])->name('pago.realizar');
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');


// Ruta para mostrar la vista del pago
Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');

// Ruta para procesar el pago
Route::post('/pago/realizar', [PagoController::class, 'realizarPago'])->name('pago.realizar');

// Ruta para la página de éxito
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');
Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');
Route::post('/pago/realizar', [PagoController::class, 'realizarPago'])->name('pago.realizar');
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');
// Ruta para mostrar el carrito de compras
Route::get('/carrito', [PagoController::class, 'index'])->name('carrito.index');

// Ruta para realizar el pago
Route::post('/pago', [PagoController::class, 'realizarPago'])->name('pago.realizar');

// Ruta para mostrar la página de confirmación de pago
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');
// Ruta para mostrar el carrito de compras
Route::get('/carrito', [PagoController::class, 'index'])->name('carrito.index');

// Ruta para proceder al pago
Route::get('/pago', [PagoController::class, 'index'])->name('pago'); // Esta es la ruta que falta

// Ruta para realizar el pago
Route::post('/pago', [PagoController::class, 'realizarPago'])->name('pago.realizar');

// Ruta para mostrar la página de confirmación de pago
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');


Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');
Route::post('/pago/realizar', [PagoController::class, 'realizarPago'])->name('pago.realizar');
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');
// Página de Políticas de Privacidad
Route::get('/politicas-privacidad', function () {
    return view('politicas.privacidad');
})->name('politicas.privacidad');

// Página de Términos y Condiciones
Route::get('/terminos-condiciones', function () {
    return view('politicas.terminos');
})->name('politicas.terminos');
// Página de Políticas de Privacidad
Route::get('/politicas-privacidad', function () {
    return view('politicas.privacidad');
})->name('politicas.privacidad');

// Página de Términos y Condiciones
Route::get('/terminos-condiciones', function () {
    return view('politicas.terminos');
})->name('politicas.terminos');
// Ruta para mostrar las reseñas y el formulario
Route::get('/reseñas', function () {
    return view('reseñas');
})->name('reseñas');

// Ruta para manejar el envío de reseñas (esto las almacenará en la sesión)
Route::post('/reseñas', function (Request $request) {
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string|max:1000',
    ]);

    $reviews = session()->get('reviews', []);
    $reviews[] = [
        'rating' => $request->rating,
        'review' => $request->review,
    ];

    session()->put('reviews', $reviews);

    return redirect()->route('reseñas')->with('success', 'Reseña enviada con éxito.');
});


Route::get('/reseñas', function () {
    return view('reseñas');
})->name('reseñas');

// Ruta para manejar el almacenamiento de reseñas
Route::post('/reseñas', function (\Illuminate\Http\Request $request) {
    $reviews = session('reviews', []);

    // Guardar la nueva reseña en la sesión
    $reviews[] = [
        'rating' => $request->input('rating'),
        'review' => $request->input('review'),
    ];

    session(['reviews' => $reviews]);

    return redirect()->route('reseñas');
})->name('review.store');
// En routes/web.php
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/ayuda', function () {
    return view('ayuda');
})->name('ayuda');

Route::get('/envios', function () {
    return view('envios');
})->name('envios');


Route::get('/ayuda', [PaginaController::class, 'ayuda'])->name('ayuda');
Route::get('/como-realizar-pedido', [PaginaController::class, 'comoRealizarPedido'])->name('como-realizar-pedido');
Route::get('/como-rastrear-envio', [PaginaController::class, 'comoRastrearEnvio'])->name('como-rastrear-envio');
Route::get('/como-cambiar-producto', [PaginaController::class, 'comoCambiarProducto'])->name('como-cambiar-producto');
Route::get('/contactar-servicio-cliente', [PaginaController::class, 'contactarServicioCliente'])->name('contactar-servicio-cliente');


Route::get('/ayuda', [PaginaController::class, 'ayuda'])->name('ayuda');
Route::get('/como-realizar-pedido', [PaginaController::class, 'comoRealizarPedido'])->name('como-realizar-pedido');
Route::get('/como-rastrear-envio', [PaginaController::class, 'comoRastrearEnvio'])->name('como-rastrear-envio');
Route::get('/como-cambiar-producto', [PaginaController::class, 'comoCambiarProducto'])->name('como-cambiar-producto');
Route::get('/contactar-servicio-cliente', [PaginaController::class, 'contactarServicioCliente'])->name('contactar-servicio-cliente');


Route::get('/ayuda', [PaginaController::class, 'ayuda'])->name('ayuda');
Route::get('/como-realizar-pedido', [PaginaController::class, 'comoRealizarPedido'])->name('como-realizar-pedido');
Route::get('/como-rastrear-envio', [PaginaController::class, 'comoRastrearEnvio'])->name('como-rastrear-envio');
Route::get('/como-cambiar-producto', [PaginaController::class, 'comoCambiarProducto'])->name('como-cambiar-producto');
Route::get('/contactar-servicio-cliente', [PaginaController::class, 'contactarServicioCliente'])->name('contactar-servicio-cliente');



Route::get('/carrito', [PaginaController::class, 'carrito'])->name('carrito');
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');

// Ruta para el carrito
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');


Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('agregarProducto');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');


Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('agregarProducto');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('agregarProducto');
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
// Archivo: routes/web.php



// Ruta para ver el carrito (debe tener el nombre 'carrito.index')
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');

// Ruta para agregar productos al carrito
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('agregarProducto');

// Ruta para eliminar productos del carrito
Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

// Ruta para proceder al pago (puedes cambiarla según tu implementación)
Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito');
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
use App\Http\Controllers\CuponController;

Route::get('/cupones', [CuponController::class, 'index'])->name('cupones.index');


Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito');
Route::get('/pago', function () {
    return view('pago');
})->name('pago');
Route::post('/procesar_pago', [PagoController::class, 'procesarPago'])->name('procesar_pago');

// Ruta para mostrar el formulario de pago
Route::get('/pago', function () {
    return view('pago');
});

// Ruta para procesar el pago (enviar datos del formulario)
Route::post('/procesar-pago', [PagoController::class, 'procesarPago']);


// Ruta para mostrar el formulario de pago
Route::get('/pago', function () {
    return view('pago');
});

// Ruta para procesar el pago (enviar datos del formulario)
Route::post('/procesar-pago', [PagoController::class, 'procesarPago']);

// Ruta para ver el recibo
Route::get('/recibo', function () {
    return view('recibo');
});


// Ruta para mostrar el formulario de pago
Route::get('/pago', function () {
    return view('pago');
});

// Ruta para procesar el pago (enviar datos del formulario)
Route::post('/procesar-pago', [PagoController::class, 'procesarPago']);

// Ruta para ver el recibo
Route::get('/recibo', function () {
    return view('recibo');
});


// Ruta para mostrar el formulario de pago
Route::get('/pago', function () {
    return view('pago');
})->name('pago'); // Agregamos un nombre a esta ruta

// Ruta para procesar el pago (enviar datos del formulario)
Route::post('/procesar-pago', [PagoController::class, 'procesarPago']);

// Ruta para ver el recibo
Route::get('/recibo', function () {
    return view('recibo');
});
