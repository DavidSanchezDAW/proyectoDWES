@extends('layout')
@section('contenido')
<div class="card registro">
    <form action="{{route('login')}}" method="POST">
        @csrf
    <h1>Inciar Sesión</h1>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
        <input type="text" class="form-control" id="formGroupExampleInput2">
    </div>
    <div class="mb-3">
        
        <input type="submit" value="Iniciar sesión" class="btn btn-primary" style="background:rgb(253, 4, 4); border:none" id="formGroupExampleInput2">
    </div>
    </form>
</div>
@endsection