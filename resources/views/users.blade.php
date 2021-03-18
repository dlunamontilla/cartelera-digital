@extends('master.home')

@section('content')
<p>Lista de personas:</p>
<ul>
    @foreach ( $users as $usuario )
        <li>{{ $usuario }}</li>
    @endforeach
</ul>
@endsection

@section('title', "Datos - Cartelera Digital")
