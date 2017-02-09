@extends('template.layout')

@section('title', 'Home')

@section('contenido')


@if (Auth::check())

<h4>{{ Auth::user()->rol }}</h4>
	<h2 class="text-center">Facultad de Ingeniería Electromecánica</h2>

	<h3 class="text-center">Buen día {{ Auth::user()->name }}</h3>

@endif

@endsection