{{-- // resources/views/categorias/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <h1>Categorías</h1>
    <ul>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria->nombre }} - {{ $categoria->descripcion }}</li>
        @endforeach
    </ul>
@endsection
