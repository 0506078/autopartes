<!DOCTYPE html>
<html>
<head>
    <title>Autopartes</title>
    <style>
        body {
            background-color: #e0f0ff; /* azul bajito */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #007BFF;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 30px;
            text-align: center;
        }

        .producto {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin: 15px auto;
            width: 300px;
            box-shadow: 0 0 10px #ccc;
        }

        .producto h3 {
            margin-top: 0;
        }

        .producto a {
            display: inline-block;
            margin-top: 10px;
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
        }

        .producto a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="/carrito">Carrito</a>
        <a href="/pago">Pago</a>
        <a href="/contacto">Contacto</a>
        <a href="/login">Login</a>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>

</body>
</html>

<nav>
    <ul>
        <li><a href="{{ route('politicas.privacidad') }}">Política de Privacidad</a></li>
        <li><a href="{{ route('politicas.terminos') }}">Términos y Condiciones</a></li>
    </ul>
</nav>
<li><a href="{{ route('cupones.index') }}">Cupones</a></li>
