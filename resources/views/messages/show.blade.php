@extends('messages.index')
@section('mensaje')
    <div class="card-body">
      <h5 class="card-title">{{$message->subject}}</h5>
      <p style="color:#898989">De: {{$message->name}}</p>
      <h6 class="card-subtitle mb-2 text-muted">{{$message->subtitle}}</h6>
      <p class="card-text">{{$message->text}}</p>
      <form action={{route('messages.destroy', $message)}} method="post">
        @csrf 
        @method('DELETE')
        <input type="submit" value="Eliminar" class="btn btn-danger">
      </form>
    </div>


@endsection