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
      @auth
      @if(Auth::user()->rol == "admin")
      <td><a href={{route('events.edit', $event)}}>Editar</a></td>
      <td>
        <form action={{route('events.destroy', $event)}} method="post">
          @csrf 
          @method('DELETE')
          <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
      @endif
      @endauth
      
    </tr>
    @empty
    <p>No hay eventos programados</p>
    @endforelse
  </tbody>
</table>
@endsection
