@extends('layout')
@section('contenido')
<div class="card registro">
    <h1>Registro</h1>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
        <input type="text" class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Fecha de nacimiento</label>
        <input class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Instagram</label>
        <input placeholder="https://www.instagram.com/tuCuenta/" class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Twitch</label>
        <input placeholder="https://www.twitch.tv/tuCuenta" class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        
        <input type="submit" value="Registrarse" class="btn btn-primary" style="background:rgb(253, 4, 4); border:none" id="formGroupExampleInput2">
    </div>
</div>
@endsection