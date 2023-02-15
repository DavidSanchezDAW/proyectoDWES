@extends('layout')
@section('contenido')
<form>
    <div class="form-group contacto">
        <label for="asunto">Asunto</label>
        <input class="form-control" id="asunto">
    </div>
    <div class="mensaje">
        <label for="exampleInputEmail1">Mensaje</label>
        <textarea class="form-control" id="mensaje" cols="5" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
@endsection
