@extends('messages.index')
@section('mensaje')
    <h3>{{$message->name}}</h3>
    <p>{{$message->subject}}</p>
    <p>{{$message->mensaje}}</p>
@endsection