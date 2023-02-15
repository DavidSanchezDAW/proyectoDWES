@extends('layout')
@section('titulo', 'Crear evento')
@section('contenido')
<form action={{route('events.update', $event)}} method="post">
    @csrf
    @method('put')
    <h1>Editar evento</h1>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre Evento</label>
      <input value="{{$event->name}}" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descripcion</label>
      <textarea class="form-control" name="description"rows="3">{{$event->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Localidad</label>
      <input value="{{$event->location}}" name="location" class="form-control">
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input value="{{$event->date}}" type="date" name="date" class="form-control" style="width:8em">
    </div>
    <div class="form-group">
        <label >Hora</label>
        <input value="{{$event->time}}" type="time" name="time" class="form-control" style="width:8em">
    </div>
    <div class="form-group">
        <label class="form-check-label">Publico</label><input type="checkbox" name="visible" value="1" class="form-check-input" {{$event->visible ? 'checked' : ''}}>
    </div>
        <input type="submit" value="Actualizar evento" class="btn btn-primary" style="background:rgb(253, 4, 199);border:none; margin-top:1em;">
  </form>
  @endsection   
