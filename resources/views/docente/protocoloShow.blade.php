@extends('template.layout')

@section('title', 'Protocolo')

@section('contenido')

<h1>Protocolo</h1>

<p><b>Título:</b> {{$protocolo->titulo}}</p>

<p><b>Objetivo:</b> {{$protocolo->objetivo_pro}}</p>

<p><b>Descripción:</b> {{$protocolo->descripcion}}</p>

<p><b>Requerimientos: </b>{{$protocolo->requerimientos}}</p>

<p><b>Recursos:</b> {{$protocolo->recursos}}</p>

@endsection