@extends('layout')

@section('content')
<h1>Lista de Personas</h1>
<ul>
    @foreach ($personas as $persona)
        <li>{{ $persona->nombre }} - {{ $persona->edad }} años - {{ $persona->rol }}</li>
    @endforeach
</ul>
@endsection
