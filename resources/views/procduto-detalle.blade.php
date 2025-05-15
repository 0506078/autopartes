@extends('layouts.app')

@section('contenido')
    <h1>{{ $producto['nombre'] }}</h1>
    <p>{{ $producto['descripcion'] }}</p>
    <p>Precio: ${{ $producto['precio'] }}</p>
    <img src="{{ asset('imagenes/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}">

    <!-- Formulario para agregar al carrito -->
    <form action="{{ route('agregarProducto') }}" method="POST">
        @csrf
        <input type="hidden" name="producto_id" value="{{ $producto['id'] }}">
        <button type="submit">Agregar al carrito</button>
    </form>
@endsection

