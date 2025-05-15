@extends('layouts.app')

@section('contenido')
    <h1>Productos</h1>

    <!-- Buscador -->
    <form method="GET" action="{{ url('/productos') }}" style="margin-bottom: 20px;">
        <input type="text" name="buscar" placeholder="Buscar producto..." value="{{ request('buscar') }}">
        <button type="submit" class="btn-buscar">Buscar</button>
    </form>

    <!-- Contenedor de productos -->
    <div class="productos-grid">
        @foreach ($productos as $producto)
            <div class="producto-card">
                <div class="producto-imagen-container">
                    <img src="{{ asset('images/' . $producto['imagen']) }}" alt="{{ $producto['nombre'] }}" class="producto-imagen">
                </div>
                <h3>{{ $producto['nombre'] }}</h3>
                <p>{{ $producto['descripcion'] }}</p>
                <p><strong>Precio: ${{ $producto['precio'] }}</strong></p>
                
                <!-- Formulario para agregar el producto al carrito -->
                <form action="{{ route('agregarProducto') }}" method="POST">
                    @csrf
                    <input type="hidden" name="producto_id" value="{{ $producto['id'] }}">
                    <button type="submit" class="btn-agregar">Agregar al carrito</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection

@section('styles')
    <style>
        /* Estilos para la cuadrícula de productos */
        .productos-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Ahora hay 4 columnas */
            gap: 20px;
            padding: 20px;
        }

        /* Estilo para cada tarjeta de producto */
        .producto-card {
            border: 2px solid #28a745; /* Bordes verdes */
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            overflow: hidden; /* Para no desbordar la imagen */
        }

        /* Efectos al pasar el ratón sobre la tarjeta */
        .producto-card:hover {
            transform: translateY(-10px); /* Eleva el producto al pasar el ratón */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Sombra más intensa */
        }

        /* Estilo para la imagen del producto */
        .producto-imagen-container {
            position: relative;
            border: 3px solid #28a745; /* Borde verde alrededor de la imagen */
            border-radius: 10px;
            overflow: hidden; /* Hace que la imagen no se salga de los bordes */
            margin-bottom: 10px;
        }

        .producto-imagen {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .producto-card:hover .producto-imagen {
            transform: scale(1.1); /* Aumenta la imagen al pasar el ratón */
        }

        /* Botón de agregar al carrito */
        .btn-agregar {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-agregar:hover {
            background-color: #0056b3; /* Cambio de color al pasar el ratón */
        }

        /* Estilo para el botón de búsqueda */
        .btn-buscar {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-buscar:hover {
            background-color: #218838;
        }

        /* Input de búsqueda */
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 250px;
        }
    </style>
@endsection
