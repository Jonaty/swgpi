@extends('template.layout')

@section('title', 'Docente')

@section('contenido')

<h1>Docente</h1>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="success">Nombre</th>
			<th class="success">Estado</th>
		</tr>
	</thead>

	<tbody>
			@foreach ($protocolos as $protocolo)
			<tr>
				<td><a href="{{ route('docente.edit', $protocolo->id) }}"> {{ $protocolo->titulo}} </a></td>
				<td>Estado</td>
			</tr>
			@endforeach
		
	</tbody>
</table>

@endsection