@extends('layout')
@section('contenido')
@isset($_GET['sent'])
    <div class="alert alert-success" role="alert">
        Mensaje enviado correctamente
    </div>
@endisset
<form action={{route('messages.store')}} method="post">
    @csrf
    @auth
        nombre: {{auth()->user()->name}}
        <input type="hidden" name="name" value="{{auth()->user()->name}}">
    @endauth
    @guest
        <div class="form-group contacto">
            <label for="nombre">Nombre</label>
            <input name="name" class="form-control" id="nombre">
        </div>
    @endguest
    <div class="form-group contacto">
        <label for="asunto">Asunto</label>
        <input name="subject" class="form-control" id="asunto">
    </div>
    <div class="mensaje">
        <label for="exampleInputEmail1">Mensaje</label>
        <textarea name="text" class="form-control" id="mensaje" cols="5" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif
@endsection
