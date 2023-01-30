@extends('layout')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h1>{{$event->name}}</h1>
        <p>Localidad: {{$event->location}}</p>
        <p>Fecha: {{$event->date}}</p>
        <p>Hora: {{$event->time}}</p>
        <p>Descripción: {{$event->description}}</p>
    </div>
</div>
@endsection