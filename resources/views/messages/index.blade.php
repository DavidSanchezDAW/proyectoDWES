@extends('layout')
@section('titulo', 'Mensajes')
@section('contenido')
<h2>Mensajes</h2>
<div class="flex-row ">

    <div class="list-group lista-mensajes col-md-6">
        @forelse ($msgs as $message)
            <a href={{route('messages.show', $message)}} class="list-group-item list-group-item-action {{$message->readed == 1 ? 'readed' : ''}}">
            {{ $message->name }}
            </a>

            @empty
            <li>No hay mensajes destacados</li>
            @endforelse
    </div>
    <div class="card mensaje-display" style="width:80%">
        @yield('mensaje')
    </div>


</div>
@endsection