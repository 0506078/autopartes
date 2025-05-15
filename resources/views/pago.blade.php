<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-center mb-6 text-blue-600">Página de Pago</h2>

        <!-- Resumen de la orden -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Resumen de la Orden</h3>
            <div class="flex justify-between mb-2">
                <span>Filtro de Aceite</span>
                <span>$200</span>
            </div>
            <div class="flex justify-between font-semibold">
                <span>Total</span>
                <span>$200</span>
            </div>
        </div>

        <!-- Método de pago -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Método de Pago</h3>
            <select id="payment-method" name="payment_method" class="w-full px-4 py-2 border border-gray-300 rounded-md">
                <option value="credit-card">Tarjeta de Crédito/Débito</option>
                <option value="paypal">PayPal</option>
            </select>
        </div>

        <!-- Detalles de la tarjeta (solo visible cuando selecciona tarjeta de crédito/débito) -->
        <div id="credit-card-details" class="mb-6 hidden">
            <h3 class="text-lg font-semibold text-gray-700">Detalles de la Tarjeta</h3>
            <input type="text" placeholder="Número de Tarjeta" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4">
            <input type="text" placeholder="Fecha de Vencimiento (MM/YY)" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4">
            <input type="text" placeholder="CVV" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4">
        </div>

        <!-- Cupones -->
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700">Código de Cupón</h3>
            <input type="text" id="coupon" name="coupon" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Ingresa tu código de cupón">
            <button type="button" id="apply-coupon" class="mt-2 w-full bg-blue-500 text-white py-2 rounded-md">Aplicar Cupón</button>
        </div>

        <!-- Botón de Pagar -->
        <button type="button" id="pay-btn" class="w-full bg-green-500 text-white py-2 rounded-md mt-4">Pagar</button>

        <!-- Instrucciones para imprimir recibo -->
        <div class="text-center text-sm mt-4">
            <p>Para imprimir el recibo, presiona <a href="javascript:window.print()" class="text-blue-500 hover:underline">aquí</a>.</p>
        </div>
    </div>

    <script>
        // Lógica para mostrar detalles de tarjeta de crédito cuando se selecciona "Tarjeta de Crédito/Débito"
        const paymentMethodSelect = document.getElementById('payment-method');
        const creditCardDetails = document.getElementById('credit-card-details');

        paymentMethodSelect.addEventListener('change', () => {
            if (paymentMethodSelect.value === 'credit-card') {
                creditCardDetails.classList.remove('hidden');
            } else {
                creditCardDetails.classList.add('hidden');
            }
        });

        // Lógica de cupones
        const applyCouponBtn = document.getElementById('apply-coupon');
        const totalPriceElement = document.getElementById('total-price');
        
        applyCouponBtn.addEventListener('click', () => {
            const couponCode = document.getElementById('coupon').value;
            let totalAmount = 200; // Precio original

            if (couponCode === 'DESCUENTO10') {
                totalAmount = totalAmount * 0.9; // Descuento del 10%
            } else if (couponCode === 'DESCUENTO20') {
                totalAmount = totalAmount * 0.8; // Descuento del 20%
            }

            alert('El nuevo total es: $' + totalAmount); // Alerta con el total actualizado
        });

        // Lógica del botón de pago
        const payButton = document.getElementById('pay-btn');
        payButton.addEventListener('click', () => {
            alert('Pago realizado con éxito'); // Simulación de pago exitoso
            // Aquí puedes redirigir al usuario a una página de éxito, por ejemplo:
            // window.location.href = '/pago-exitoso';
        });
    </script>

</body>
</html>
