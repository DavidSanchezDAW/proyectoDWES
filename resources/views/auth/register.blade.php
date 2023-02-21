@extends('layout')
@section('contenido')
<form action={{route('register')}} method="POST">
    @csrf
<div class="card registro">
    <h1>Registro</h1>
    <div class="mb-3">
        <label for="a" class="form-label">Nombre</label>
        <input value="{{old('name')}}" type="text" class="form-control" name="name" id="a">
        @error('name') {{$message}} @enderror
    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Email</label>
        <input value="{{old('email')}}" type="text" class="form-control" name="email" id="a2">
        @error('email') {{$message}} @enderror

    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Contraseña</label>
        <input value="{{old('passworld')}}"type="password" class="form-control" name="password" id="a2">
        @error('password') {{$message}} @enderror

    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">repetir Contraseña</label>
        <input type="text" class="form-control" name="password_confirmation" id="a2">
        @error('password_confirmation') {{$message}} @enderror

    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="a2" value="{{old('birthday')}}" name="birthday">
        @error('birthday') {{$message}} @enderror

    </div>
    {{-- <div class="mb-3">
        <label for="a2" class="form-label">Instagram</label>
        <input placeholder="https://www.instagram.com/tuCuenta/" class="form-control" id="a2">
    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Twitch</label>
        <input placeholder="https://www.twitch.tv/tuCuenta" class="form-control" id="a2">
    </div> --}}
    <div class="mb-3">
        
        <input type="submit" value="Registrarse" class="btn btn-primary" style="background:rgb(253, 4, 4); border:none" id="a2">
    </div>
</div>
</form>
@endsection