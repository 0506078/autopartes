@extends('layouts.app')

@section('contenido')
    <h1>Bienvenido a Autopartes</h1>
    <p>Encuentra las mejores autopartes aquí.</p>

    <!-- Sección de Información sobre la empresa -->
    <section class="empresa">
        <h2>Acerca de Nosotros</h2>
        <p><strong>Experiencia:</strong> Más de 10 años proporcionando autopartes de alta calidad para vehículos. Nos especializamos en ofrecer productos duraderos y confiables para garantizar la seguridad y el rendimiento de tu automóvil.</p>
        <p><strong>Nuestra Misión:</strong> Ser el proveedor líder de autopartes a nivel nacional, con un enfoque en la satisfacción del cliente y la excelencia en la calidad de nuestros productos.</p>
        <p><strong>Nuestra Visión:</strong> Expandir nuestra presencia a nivel internacional y seguir innovando con los mejores productos y servicios para nuestros clientes.</p>

        <h3>¿Por qué elegirnos?</h3>
        <ul>
            <li>Productos de calidad garantizada</li>
            <li>Atención personalizada al cliente</li>
            <li>Envíos rápidos y seguros</li>
            <li>Precios competitivos y ofertas exclusivas</li>
        </ul>

        <h3>Contacto</h3>
        <p>Si tienes alguna pregunta, no dudes en contactarnos:</p>
        <ul>
            <li>Teléfono: +1 (800) 123-4567</li>
            <li>Email: contacto@autopartes.com</li>
            <li>Dirección: Calle Ficticia 123, Ciudad, País</li>
        </ul>

        <!-- Botón de Reseñas -->
        <div style="margin-top: 30px;">
            <a href="{{ route('reseñas') }}" style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                Ver Reseñas de Productos
            </a>
        </div>

        <!-- Botón de Ayuda -->
        <div style="margin-top: 20px;">
            <a href="{{ route('ayuda') }}" style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                Ayuda y Soporte
            </a>
        </div>

        <!-- Botón de Envíos -->
        <div style="margin-top: 20px;">
            <a href="{{ route('envios') }}" style="display: inline-block; background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                Envíos y Devoluciones
            </a>
        </div>
<!-- Botón de Cupones -->
<div style="margin-top: 20px;">
    <a href="{{ route('cupones.index') }}" style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
        Cupones y Promociones
    </a>
</div>
        <!-- Botón de FAQ más discreto -->
        <div style="margin-top: 10px; text-align: center;">
            <a href="{{ route('faq') }}" style="font-size: 14px; color: gray; text-decoration: underline;">
                ¿Tienes dudas? Consulta nuestras Preguntas Frecuentes
            </a>
        </div>
    </section>
@endsection
