@extends('layouts.app')

@section('content')
    <h1>Editar categoría</h1>
    <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
        @csrf
        @method('patch')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion">{{ $categoria->descripcion }}</textarea>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
