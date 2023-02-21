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
        <label for="exampleFormControlInput1">Nueva Contraseña</label>
        <input name="password" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contraseña">
        @error('password') <p style="color:red">{{$message}}</p> @enderror
    </div><br>
    <div class="form-group">
        <label for="exampleFormControlInput1">Instagram</label>
        <input name="instagram" value="{{$user->instagram}}" type="text" class="form-control" id="exampleFormControlInput1">
        @error('instagram') <p style="color:red">{{$message}}</p> @enderror
    </div><br>
    <div class="form-group">
        <label for="exampleFormControlInput1">Twitch</label>
        <input name="twitch" value="{{$user->twitch}}" type="text" class="form-control" id="exampleFormControlInput1">
        @error('twitch') <p style="color:red">{{$message}}</p> @enderror
    </div><br>
    <div class="form-group">
        <label for="exampleFormControlInput1">twitter</label>
        <input name="twitter" value="{{$user->twitter}}" type="text" class="form-control" id="exampleFormControlInput1">
        @error('twitter') <p style="color:red">{{$message}}</p> @enderror
    </div><br>
    <div class="form-group">
        <label for="exampleFormControlInput1">Fecha de nacimiento</label>
        <input name="birthday" value="{{$user->birthday}}" type="date" class="form-control" id="exampleFormControlInput1">
        @error('birthday') <p style="color:red">{{$message}}</p> @enderror
    </div><br>
    <div class="form-group">
        <input type="submit" value="Actualizar" class="btn btn-primary" style="background:rgb(253, 4, 4); border:none" id="a2">
</form>
@endsection