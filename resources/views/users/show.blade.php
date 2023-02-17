@extends('layout')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h1>{{$user->name}}
        @if($user->rol == "admin")
        <span style="color:rgb(190, 162, 0); font-size:.7em;">Administrador</span>
        @endif
        </h1>
        <p>Email: {{$user->email}}</p>
        <p>Fecha de nacimiento: {{$user->birthday}}</p>
        <p>

            <a href={{$user->instagram}} class="social-link">
            <img src={{asset('img/instagram.webp')}} style="height: 60px;"/>
            </a>
            <a href={{$user->twitch}} class="social-link">
            <img src={{asset('img/twitch.png')}} style="height: 60px;"/>
            </a>
        </p>
    </div>
</div>
@endsection
