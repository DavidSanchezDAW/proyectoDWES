@extends('layout')
@section('contenido')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Localidad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Tags</th>
      @Auth
      @if(Auth::user()->rol == "admin")
      <th scope="col" style="background-color:darksalmon">Editar</th>
      <th scope="col" style="background-color:darksalmon">Eliminar</th>
      <th scope="col" style="background-color:darksalmon">Visibilidad</th>
      @endif
      @endauth
    </tr>
  </thead>
  <tbody>
    @forelse($events as $event)
    <tr
    @if($event->visible == 0)
    style="background-color:lightgray"
    @endif
    >
      @auth
      <th scope="row"><a href={{route('events.show', $event)}}>{{$event->name}}</th>
      @endauth
      @guest
      <th scope="row">{{$event->name}}</th>
      @endguest
      <td>{{$event->location}}</td>
      <td>{{$event->date}}</td>
      <td>{{$event->tags}}</td>
      @auth
      @if(Auth::user()->rol == "admin")
      <td>
        <a class="btn btn-warning" href={{route('events.edit', $event)}}>Editar</a></td>
      <td>
        <form action={{route('events.destroy', $event)}} method="post">
          @csrf 
          @method('DELETE')
          <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
      <td>
        <form action={{route('events.cambiarVisibilidad', $event)}} method="post">
          @csrf 
        @if($event->visible == 0)
          <input type="submit" value="Hacer visible" class="btn btn-light">
        @else
          <input type="submit" value="Hacer invisible" class="btn btn-dark">
        @endif
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
