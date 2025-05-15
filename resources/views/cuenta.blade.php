@extends('layouts.app')

@section('contenido')
    <h1>Mi Cuenta</h1>
    <p>Bienvenido, <strong>Usuario</strong></p>
    <p><a href="{{ route('seguimiento') }}">Ver mis pedidos</a></p>
    <p><a href="{{ route('logout') }}">Cerrar Sesión</a></p>
@endsection
