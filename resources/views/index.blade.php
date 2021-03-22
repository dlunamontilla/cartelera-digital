@extends('main.main')

@section('title__page', $ControllObject['title__page'] )

@section('nav')
<nav class="nav__contain nav__contain--center">
    <ul class="nav__menu">
        @foreach( $ControllObject['nav_links_route'] as $item )
        <li class="nav__menu_item">
            <a href="{{ $item['link'] }}" class="nav__menu_enlace">{{ $item['name'] }}</a>
        </li>
        @endforeach
    </ul>
</nav>
@endsection
