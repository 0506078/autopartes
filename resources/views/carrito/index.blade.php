@extends('layouts.app')

@section('contenido')
    <h1>Carrito de Compras</h1>

    @if (session('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif

    @php $productos = session('carrito', []); @endphp

    @if (count($productos) === 0)
        <p>Tu carrito está vacío.</p>
    @else
        <ul>
            @php $total = 0; @endphp

            @foreach ($productos as $producto)
                @php $total += $producto['precio']; @endphp
                <li>
                    <img src="{{ asset('images/' . $producto['imagen']) }}" width="100">
                    <h3>{{ $producto['nombre'] }}</h3>
                    <p>{{ $producto['descripcion'] }}</p>
                    <p>Precio: ${{ $producto['precio'] }}</p>

                    <!-- Botón para eliminar producto -->
                    <form action="{{ route('carrito.eliminar', ['id' => $producto['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <h3>Total: ${{ $total }}</h3>

        
        <div style="margin-top: 30px;">
            <a href="{{ route('pago.index') }}" style="display: inline-block; background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
                Proceder al Pago
            </a>
        </div>
    @endif
@endsection
