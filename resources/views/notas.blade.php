@extends('layout.app')

@section('title', 'Notas')

@section('content')
	<table class="table table-striped">
    <caption><h2>Listado de Notas</h2></caption>
        <hr>
            <th>Titulo</th> <th>Cuerpo</th> <th>Autor</th>
        </hr>
    @foreach($post as $notas)
		<tr>
			<td>{{$notas->title}}</td>
			<td>{{$notas->cuerpo}}</td>
			<td>{{$notas->user->name}}</td>
		</tr>
		
	@endforeach
	</table>
@stop