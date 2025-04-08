@extends('layouts.app')

@section('content')
    <h1>Crear categoría</h1>
    <form method="POST" action="{{ route('categorias.store') }}">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection
