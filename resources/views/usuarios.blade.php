@extends('layout.app')

@section('content')
    <table class="table table-striped">
    <caption><h2>Listado de usuarios</h2></caption>
        <hr>
            <th>Nombre completo</th> <th>email</th> <th>Fecha Creacion</th>
        </hr>
	@foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->name}}
            {{$usuario->apellidos}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->created_at}}</td>
        </tr>
		
	@endforeach
    </table>
@stop