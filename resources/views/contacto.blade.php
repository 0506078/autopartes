@extends('layouts.app')

@section('contenido')
    <h1>Contacto</h1>
    <p>Envíanos tus dudas o comentarios.</p>
    
    <!-- Formulario de contacto -->
    <form>
        <input type="text" placeholder="Nombre" required>
        <input type="email" placeholder="Correo" required>
        <textarea placeholder="Mensaje" required></textarea>
        <button type="submit">Enviar</button>
    </form>

    <h2>Información de Contacto</h2>
    <p><strong>Correo Electrónico:</strong> contacto@autopartes.com</p>
    <p><strong>Teléfono:</strong> +1 (800) 123-4567</p>

    <h3>Síguenos en Redes Sociales</h3>
    <ul>
        <li><a href="https://www.facebook.com/tuempresa" target="_blank">Facebook</a></li>
        <li><a href="https://www.instagram.com/tuempresa" target="_blank">Instagram</a></li>
        <li><a href="https://www.twitter.com/tuempresa" target="_blank">Twitter</a></li>
    </ul>

@endsection
