@extends('messages.index')
@section('mensaje')
    <div class="card-body">
      <h5 class="card-title">{{$message->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$message->subtitle}}</h6>
      <p class="card-text">{{$message->text}}</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>


@endsection