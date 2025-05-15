@extends('layouts.app')

@section('contenido')
    <h1>Carrito de Compras</h1>

    @if (session('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif

    @php $productos = session('carrito', []); $total = 0; @endphp

    @if (count($productos) === 0)
        <p>Tu carrito está vacío.</p>
    @else
        <ul>
            @foreach ($productos as $producto)
                @php $total += $producto['precio']; @endphp
                <li style="margin-bottom: 20px;">
                    <img src="{{ asset('images/' . $producto['imagen']) }}" width="100">
                    <h3>{{ $producto['nombre'] }}</h3>
                    <p>{{ $producto['descripcion'] }}</p>
                    <p>Precio: ${{ $producto['precio'] }}</p>

                    <form action="{{ route('carrito.eliminar', ['id' => $producto['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="margin-top: 5px;">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <h3>Total: ${{ $total }}</h3>

        <!-- Botón de pago dentro del contenido -->
        <div style="margin-top: 20px;">
            <a href="{{ route('pago') }}" style="display: inline-block; background-color: red; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                Proceder al pago
            </a>
        </div>
    @endif
@endsection
