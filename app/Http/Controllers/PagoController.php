<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('pago');
    }

    public function procesarPago(Request $request)
    {
        // Lógica para procesar el pago (aquí solo mostramos un ejemplo)
        $name = $request->input('name');
        $amount = $request->input('amount');
        $paymentMethod = $request->input('payment_method');
        $coupon = $request->input('coupon');

        // Si hay un cupón, aplica el descuento
        if ($coupon === 'DESCUENTO10') {
            $amount *= 0.9; // 10% de descuento
        } elseif ($coupon === 'DESCUENTO20') {
            $amount *= 0.8; // 20% de descuento
        }

        
        return redirect()->route('pago.success')->with('amount', $amount);
    }

    public function pagoExitoso(Request $request)
    {
        // Obtener el monto desde la sesión
        //   $amount = session('amount');
        
        return view('success', compact('amount'));
    }
}
