@extends('layout')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h1>{{$user->name}}</h1>
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
