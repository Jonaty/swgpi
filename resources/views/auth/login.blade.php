@extends('template.layout')

@section('title', 'Login')

@section('contenido')

<h1>Login</h1>

<form action="/login" method="POST">

	{!! csrf_field() !!}

	{{-- <label for="name">Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Nombre">
	<br> --}}
	<label for="email">Email</label>
	<input type="email" class="form-control" name="email" placeholder="Email">
	<br>
	<label for="password">Contraseña</label>
	<input type="password" class="form-control" name="password" placeholder="Contraseña">

	<br>
	<input type="submit" class="btn btn-primary">

</form>

@endsection