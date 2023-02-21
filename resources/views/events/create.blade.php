@extends('layout')
@section('titulo', 'Crear evento')
@section('contenido')
<form action={{route('events.store')}} method="post">
    @csrf
    <h1>Crear evento</h1>
    <div class="form-group">
      <label for="exampleFormControlInput1">Nombre Evento</label>
      <input  class="form-control" name="name" value="{{old('name')}}">
      @error('name') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Descripcion</label>
      <textarea class="form-control" name="description"rows="3">{{old('description')}}</textarea>
      @error('description') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Localidad</label>
      <input name="location" class="form-control" value="{{old('location')}}">
      @error('location') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="date" value="{{old('date')}}" class="form-control" style="width:8em">
        @error('date') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
        <label>Hora</label>
        <input type="time" name="time" value="{{old('time')}} class="form-control" style="width:8em">
        @error('time') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div class="form-group">
        <label class="form-check-label">Publico</label>
        <input type="checkbox" name="visible" value="1" class="form-check-input">
    </div>
        <input type="submit" value="Crear evento" class="btn btn-primary" style="background:rgb(253, 4, 4);border:none; margin-top:1em;">
  </form>
  @endsection   
