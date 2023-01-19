@extends('layout')
@section('contenido')
    <h1>Lista de eventos</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>Evento 1</td>
            <td>01/01/2020</td>
            <td>Descripcion del evento 1</td>
            <td>
                <a href="">Editar</a>
                <a href="">Borrar</a>
            </td>
        </tr>
        <tr>
            <td>Evento 2</td>
            <td>02/02/2020</td>
            <td>Descripcion del evento 2</td>
            <td>
                <a href="">Editar</a>
                <a href="">Borrar</a>
            </td>
        </tr>
        <tr>
            <td>Evento 3</td>
            <td>03/03/2020</td>
            <td>Descripcion del evento 3</td>
            <td>
                <a href="">Editar</a>
                <a href="">Borrar</a>
            </td>
        </tr>
    </table>
@endsection
