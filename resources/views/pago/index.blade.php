@extends('layouts.app')

@section('contenido')
    <h1>Resumen de la Orden</h1>
    <p>Por favor, selecciona un método de pago y completa los detalles.</p>

    <form action="{{ route('pago.realizar') }}" method="POST">
        @csrf

     
        <ul>
            @foreach ($productos as $producto)
                <li>
                    <h3>{{ $producto['nombre'] }}</h3>
                    <p>{{ $producto['descripcion'] }}</p>
                    <p>Precio: ${{ $producto['precio'] }}</p>
                </li>
            @endforeach
        </ul>

        <h2>Total: ${{ $total }}</h2>

       
        <label for="metodo_pago">Selecciona un método de pago:</label>
        <select id="metodo_pago" name="metodo_pago" onchange="mostrarCamposPago()">
            <option value="">-- Selecciona --</option>
            <option value="tarjeta">Tarjeta de Crédito</option>
            <option value="paypal">PayPal</option>
        </select>

        <!-- Campos para la tarjeta -->
        <div id="tarjeta_fields" style="display:none;">
            <label for="numero_tarjeta">Número de Tarjeta:</label>
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" placeholder="1234 5678 1234 5678" />

            <label for="fecha_expiracion">Fecha de Expiración:</label>
            <input type="text" id="fecha_expiracion" name="fecha_expiracion" placeholder="MM/AA" />

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" />
        </div>

        <!-- Campos para PayPal -->
        <div id="paypal_fields" style="display:none;">
            <label for="paypal_email">Correo de PayPal:</label>
            <input type="email" id="paypal_email" name="paypal_email" placeholder="ejemplo@paypal.com" />
        </div>

        <button type="submit">Realizar Pago</button>
    </form>

    <!-- Botón para imprimir el recibo -->
    <div id="recibo">
        <h3>Resumen de la Orden</h3>
        <p><strong>Total: ${{ $total }}</strong></p>
        <p>¡Gracias por tu compra! Tu número de orden es: <strong>#12345</strong></p>
        <button onclick="imprimirRecibo()">Imprimir Recibo</button>
    </div>

    <script>
        function mostrarCamposPago() {
            var metodoPago = document.getElementById('metodo_pago').value;
            var tarjetaFields = document.getElementById('tarjeta_fields');
            var paypalFields = document.getElementById('paypal_fields');

            tarjetaFields.style.display = 'none';
            paypalFields.style.display = 'none';

            
            if (metodoPago === 'tarjeta') {
                tarjetaFields.style.display = 'block';
            } else if (metodoPago === 'paypal') {
                paypalFields.style.display = 'block';
            }
        }

        function imprimirRecibo() {
            var recibo = document.getElementById('recibo').innerHTML;
            var ventana = window.open('', '', 'height=400,width=600');
            ventana.document.write('<html><head><title>Recibo de Compra</title></head><body>');
            ventana.document.write('<h1>Recibo de Compra</h1>');
            ventana.document.write(recibo);
            ventana.document.write('</body></html>');
            ventana.document.close();
            ventana.print();
        }
    </script>
@endsection
@extends('layouts.app')

@section('contenido')
    <h1>Bienvenido a Autopartes</h1>
    <p>Encuentra las mejores autopartes aquí.</p>


    <div style="margin-top: 20px;">
        <a href="{{ route('faq') }}" style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
            Ver Preguntas Frecuentes (FAQ)
        </a>
    </div>
@endsection
<li><a href="{{ route('faq') }}">FAQ</a></li>
