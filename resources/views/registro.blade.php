@extends('layouts.app')

@section('contenido')
    <h1>Registro de Usuario</h1>
    <form>
        <label>Nombre:</label>
        <input type="text" required>

        <label>Correo Electrónico:</label>
        <input type="email" required>

        <label>Contraseña:</label>
        <input type="password" required>

        <button type="submit">Registrarse</button>
    </form>
@endsection
