@extends('master.home')

{{-- titulo de la pagina --}}
@section('title', "Datos - Cartelera Digital")


{{-- seccion de la caja de contenido --}}
@section('content')
<p>Lista de personas:</p>
<ul>
    @foreach ( $users as $usuario )
        <li>{{ $usuario }}</li>
    @endforeach
</ul>
@endsection

