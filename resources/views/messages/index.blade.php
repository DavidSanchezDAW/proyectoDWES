@extends('layout')
@section('titulo', 'Mensajes')
@section('contenido')
<h2>Mensajes</h2>
<div class="flex-row ">

    <div class="list-group lista-mensajes col-md-6">
        @forelse ($msgs as $message)
            <a href={{route('messages.show', $message)}} class="list-group-item list-group-item-action {{$message->readed == 1 ? 'readed' : ''}}">
            {{ $message->subject }}
            </a>

            @empty
            <li>No hay mensajes destacados</li>
            @endforelse
    </div>
    @if($msgs->count() > 0)
    <div class="card mensaje-display" style="width:80%; border: none    ">
        @yield('mensaje')
    </div>
    @endif


</div>
@endsection