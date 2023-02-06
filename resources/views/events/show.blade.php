@extends('layout')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h1>{{$event->name}}</h1>
        <p>Localidad: {{$event->location}}</p>
        <p>Fecha: {{$event->date}}</p>
        <p>Hora: {{$event->time}}</p>
        <p>Descripción: {{$event->description}}</p>
        <ul class="list-group">
            <li class="list-group-item cabecera-lista">Participantes</li>
            @forelse($event->users as $user)
            <li class="list-group-item">{{$user->name}}</li>
            @empty
            <p style="margin:1em; color:gray">No hay participantes</p>
            @endforelse
          </ul>
    </div>
</div>
@endsection