@extends('layout')
@section('titulo', 'Crear evento')
@section('contenido')
<form action={{route('events.store')}} method="post">
    @csrf
    <h1>Editar evento</h1>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre Evento</label>
      <input  class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descripcion</label>
      <textarea class="form-control" name="description"rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Localidad</label>
      <input name="location" class="form-control">
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="date" class="form-control" style="width:8em">
    </div>
    <div class="form-group">
        <label >Hora</label>
        <input type="time" name="time" class="form-control" style="width:8em">
    </div>
    <div class="form-group">
        <label class="form-check-label">Publico</label><input type="checkbox" name="visible" value="1" class="form-check-input">
    </div>
        <input type="submit" value="Crear evento" class="btn btn-primary" style="background:rgb(253, 4, 4);border:none; margin-top:1em;">
  </form>
  @endsection   
