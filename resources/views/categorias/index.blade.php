{{-- // resources/views/categorias/index.blade.php

@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
    <ul>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria->nombre }} - {{ $categoria->descripcion }}</li>
        @endforeach
    </ul>
@endsection --}}


<!DOCTYPE html>
<html>

<head>
    <title>CATEGORÍAS</title>
</head>

<body>
    <h1>Categorias Disponibles</h1>




    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <th>{{ $categoria->id }}</th>
                    <td>{{ $categoria->nombre }}</td>
                    <td>${{ $categoria->descripcion }}</td>
                    <td>
                        {{-- // Agregar un botón editar --}}
                        <button><a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a></button>

                        {{-- // Agregar un botón eliminar --}}
                        <button><a href="{{ route('categorias.destroy', $categoria->id) }}">Eliminar</a></button>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
