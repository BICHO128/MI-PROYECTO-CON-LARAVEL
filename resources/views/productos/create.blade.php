{{-- // resources/views/productos/create.blade.php --}}
<!DOCTYPE html>
<html>

<head>
    <title>Crear Producto</title>
</head>

<body>
    <h1>Crear Producto</h1>
    <form method="POST" action="{{ route('productos.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio"><br><br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock"><br><br>
        <input type="submit" value="Crear">
    </form>
</body>

</html>
