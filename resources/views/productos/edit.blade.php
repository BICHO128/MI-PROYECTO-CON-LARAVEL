// resources/views/productos/edit.blade.php
<!DOCTYPE html>
<html>

<head>
    <title>Editar Producto</title>
</head>

<body>
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('productos.update', $producto->id) }}">
        @csrf
        @method('patch')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}"><br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="{{ $producto->precio }}"><br><br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="{{ $producto->stock }}"><br><br>
        <input type="submit" value="Editar">
    </form>
</body>

</html>
