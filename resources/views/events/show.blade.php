@extends('layout')
@section('contenido')
<div class="card">
    <div class="card-body evento-display">
        <h1>{{$event->name}}</h1>
        <p>Localidad: {{$event->location}}</p>
        <p>Fecha: {{$event->date}}</p>
        <p>Hora: {{$event->time}}</p>
        <p>Descripción: {{$event->description}}</p>
        <ul class="list-group">
            <li class="list-group-item cabecera-lista">Participantes</li>
            @forelse($event->users as $user)
            <a href={{route('users.show', $user)}} class="link-none" aria-current="true">
                <li class="list-group-item">{{$user->name}}
                    @if($user->rol == "admin")
                        <span style="color:rgb(190, 162, 0)">Administrador</span>
                    @endif
                </li>
            </a>
            @empty
            <p style="margin:1em; color:gray">No hay participantes</p>
            @endforelse
          </ul>
            @auth
                @if($event->users->contains(Auth::user()))
                <br>
                    <form action={{route('events.unparticipate', $event)}} method="post">
                        @csrf 
                        <input type="submit" value="Dejar de participar" class="btn btn-primary" style="background:red; border: 1px solid red">
                    </form>
                @else
                <form action={{route('events.participate', $event)}} method="post">
                    @csrf 
                    <input type="submit" value="Participar" class="btn btn-primary">
                </form>
                @endif
            @endauth
    </div>
</div>
@endsection