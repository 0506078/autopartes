@extends('layouts.app')

@section('contenido')
    <h1>Iniciar Sesión</h1>
    <form>
        <label>Correo Electrónico:</label>
        <input type="email" required>
        
        <label>Contraseña:</label>
        <input type="password" required>

        <button type="submit">Ingresar</button>
    </form>
    <p>¿No tienes cuenta? <a href="{{ route('registro') }}">Regístrate aquí</a></p>
@endsection
