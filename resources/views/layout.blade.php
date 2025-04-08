<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Aquí puedes incluir tus hojas de estilo y scripts comunes -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Aquí puedes incluir un encabezado común para todas las vistas -->
    <header>
        <h1>Mi Aplicación</h1>
    </header>

    <!-- Aquí se insertará el contenido específico de cada vista -->
    <main>
        @yield('content')
    </main>

    <!-- Aquí puedes incluir un pie de página común para todas las vistas -->
    <footer>
        <p>2025 Mi Aplicación</p>
    </footer>

    <!-- Aquí puedes incluir tus scripts comunes -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>