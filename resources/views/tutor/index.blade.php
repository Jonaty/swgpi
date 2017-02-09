@extends('template.layout')

@section('title', 'Tutor')


@section('contenido')

<header>

@php
	function activeMenu($url)
	{
		return request()->is($url) ? 'text-background' : '';
	}
@endphp

	<nav>
	<ul class="nav nav-pills">
		
		@if (Auth::check())
{{-- 		<li><a class="{{ activeMenu('/')}}" href="{{ route('home') }}">Home</a></li>
 --}}			
		@if(Auth::user()->hasRoles('Tutor'))
		<li><a class="{{ activeMenu('tutor')}}" href="/tutor">Protocolo</a></li>
		<li><a class="{{ activeMenu('tutor')}}" href="/tutor">Sistema</a></li>
         
		@endif
        
        <li><a href="/salir">Salir</a></li>
		@endif
        
        @if (Auth::guest())
        <li class="text-right"><a class="{{ activeMenu('login')}}" href="/login">Login</a></li>
        @endif
	</ul>
       
       <br>
	   <ul class="nav nav-pills">
        <li><a href="{{ route('tutor.create') }}">Crear</a></li>
        <li><a href="">Estado</a></li>
        <li><a href="">Válidar</a></li>
        <li><a href="">Equipos</a></li>
        <li><a href="">Tutores</a></li>
        </ul>

</nav>
</header>

@endsection


























