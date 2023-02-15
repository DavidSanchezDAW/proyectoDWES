@extends('layout')
@section('title', 'Ajustes de usuario')
@section('contenido')
<form action={{route('users.update', $user)}} method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <img src="{{asset('img/profilePictures/'.$user->profilePicture.'.jpg')}}" alt="twbs" width="82" height="82" class="rounded-circle flex-shrink-0">
        <input type="file" name="profilePicture" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
    <input name="name" value="{{$user->name}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nueva Contraseña</label>
        <input name="password" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contraseña">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Correo</label>
        <input name="email" value="{{$user->email}}" type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo">
    </div><br>
    <input type="submit" value="Guardar" class="btn btn-primary">
</form>
@endsection