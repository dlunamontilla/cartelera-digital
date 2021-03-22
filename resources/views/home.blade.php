@extends('template.basic')


@section('titleDocument',$ObjectControl->titleDocument)


@section('elements')
	@foreach( $ObjectControl->results as $element )
		<div class="show__element">
			{{-- image --}}
			@if($element['type'] === 'image')
				<img src="{{$element['path']}}" alt="{{$element['title']}}">
			@endif
			{{-- video --}}
			@if($element['type'] === 'video')
				<video src="{{$element['path']}}"></video>
			@endif
			{{-- plaintext --}}
			@if($element['type'] === 'plaintext')
				<p>{{$element['text']}}</p>
			@endif
		</div>
	@endforeach
@endsection