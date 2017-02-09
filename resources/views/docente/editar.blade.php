@extends('template.layout')

@section('title', 'Editar Protocolo')

@section('contenido')

<h1>Editar Protocolo</h1>

@if (session()->has('info2'))
	<h3 class="text-info">{{ session('info2')}}</h3>
@endif

<form action="{{ route('docente.update', $protocolo->id) }}" method="POST">

{!! method_field('PUT')!!}

 {!! csrf_field() !!}
	
	<label for="title">Título</label>
	<input type="text" class="form-control" name="titulo" placeholder="Título" value="{{ $protocolo->titulo }}">
	<br>

	<label for="objetivo_pro">Objetivo del Proyecto</label>
	<textarea name="objetivo_pro" id="" cols="30" rows="3" class="form-control">{{ $protocolo->objetivo_pro}}</textarea>
	<br>

	<label for="descripcion">Descripción del Proyecto</label>
	<textarea name="descripcion" id="" cols="30" rows="3" class="form-control">{{ $protocolo->descripcion}}</textarea>
	<br>

	<label for="requerimientos">Requerimientos de los alumnos</label>
    <textarea name="requerimientos" id="" cols="30" rows="3" class="form-control">{{ $protocolo->requerimientos}}</textarea>
 	<br>

	<label for="recursos">Recursos y Materiales</label>
	<textarea name="recursos" id="" cols="30" rows="3" class="form-control">{{ $protocolo->recursos}}</textarea>
	<br>

	<input type="submit" value="Enviar" class="btn btn-primary">

</form>
@endsection



















