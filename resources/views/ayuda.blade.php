@extends('layouts.app')

@section('contenido')
    <h1>¿Necesitas ayuda?</h1>
    <p>Estamos aquí para ayudarte con cualquier problema o duda que tengas.</p>

    <!-- Información de contacto de soporte -->
    <section class="contacto-soporte">
        <h2>Contacto de Soporte</h2>
        <p><strong>Email:</strong> <a href="mailto:soporte@autopartes.com">soporte@autopartes.com</a></p>
        <p><strong>Teléfono:</strong> +1 (800) 456-7890</p>
        <p><strong>Horario de atención:</strong> Lunes a Viernes de 9:00 am a 6:00 pm</p>
    </section>

    
    <section class="guias-recursos">
        <h2>Guías y Recursos</h2>
        <ul>
            <li><a href="{{ route('como-realizar-pedido') }}">¿Cómo realizar un pedido?</a></li>
            <li><a href="{{ route('como-rastrear-envio') }}">¿Cómo rastrear mi envío?</a></li>
            <li><a href="{{ route('como-cambiar-producto') }}">¿Cómo cambiar o devolver un producto?</a></li>
            <li><a href="{{ route('contactar-servicio-cliente') }}">¿Cómo contactar al servicio al cliente?</a></li>
        </ul>
    </section>
@endsection
