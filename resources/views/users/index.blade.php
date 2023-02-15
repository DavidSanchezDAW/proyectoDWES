@extends('layout')
@section('contenido')
<h1>Lista de miembros</h1>
<div class="list-group w-auto">
@forelse($users as $user)
  <a href={{route('users.show', $user)}} class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    <img src={{asset('img/profilePictures/'.$user->profilePicture.".jpg")}} alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0">{{$user->name}}</h6>
        <p class="mb-0 opacity-75"></p>
      </div>
      <small class="opacity-50 text-nowrap">{{$user->birthday}}</small>
    </div>
  </a>
  @empty
  <p>No hay usuarios registrados</p>
  @endforelse
</div>
@endsection
