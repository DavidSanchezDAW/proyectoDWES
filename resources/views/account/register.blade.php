@extends('layout')
@section('contenido')
<form action={{route('users.store')}} method="POST">
    @csrf
<div class="card registro">
    <h1>Registro</h1>
    <div class="mb-3">
        <label for="a" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" id="a">
    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="a2">
    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" id="a2">
    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">repetir Contraseña</label>
        <input type="text" class="form-control" name="password2" id="a2">
    </div>
    <div class="mb-3">
        <label for="a2" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="a2" name="birthday">
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