@extends('layout')
@section('contenido')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Localidad</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    @forelse($events as $event)
    <tr>
      <th scope="row"><a href={{route('events.show', $event)}}>{{$event->name}}</th>
      <td>{{$event->location}}</td>
      <td>{{$event->date}}</td>
    </tr>
    @empty
    <p>No hay eventos programados</p>
    @endforelse
  </tbody>
</table>
@endsection
