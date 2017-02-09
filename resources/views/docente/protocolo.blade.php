@extends('template.layout')

@section('title', 'Protocolo')

@section('contenido')

<h1>Protocolo</h1>

<form action="{{ route('docente.store') }}" method="POST">

 {!! csrf_field() !!}
	
	<label for="title">Título</label>
	<input type="text" class="form-control" name="titulo" placeholder="Título">
	<br>

	<label for="objetivo_pro">Objetivo del Proyecto</label>
	<textarea name="objetivo_pro" id="" cols="30" rows="3" class="form-control"></textarea>
	<br>

	<label for="descripcion">Descripción del Proyecto</label>
	<textarea name="descripcion" id="" cols="30" rows="3" class="form-control"></textarea>
	<br>

	<label for="requerimientos">Requerimientos de los alumnos</label>
    <textarea name="requerimientos" id="" cols="30" rows="3" class="form-control"></textarea>
 	<br>

	<label for="recursos">Recursos y Materiales</label>
	<textarea name="recursos" id="" cols="30" rows="3" class="form-control"></textarea>
	<br>

	<input type="submit" value="Enviar" class="btn btn-primary">

</form>
@endsection





































