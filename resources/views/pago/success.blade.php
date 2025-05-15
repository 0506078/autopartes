<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Exitoso</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-center mb-4 text-blue-600">Pago Exitoso</h2>

        <p class="mb-4 text-lg">¡Gracias por tu compra!</p>
        <p class="mb-4">El monto total pagado es: <strong>$ {{ number_format($amount, 2) }}</strong></p> <!-- Formateo del monto para mostrar dos decimales -->

        <a href="{{ route('pago') }}" class="text-blue-500 hover:underline">Volver al formulario de pago</a>
    </div>

</body>
</html>
