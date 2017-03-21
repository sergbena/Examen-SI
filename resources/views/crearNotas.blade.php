@extends('layout.app')

@section('content')
    <form class="form-signin" method="post" action="saveNota">
        
        <label for="inputPassword" >Titulo</label>
        <input type="text" class="form-control" placeholder="Titulo" required name='titulo'>
        <label for="inputPassword" >Cuerpo</label>
        <input type="textArea" class="form-control" placeholder="Cuerpo de nota" name='cuerpo' required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
        {{csrf_field()}}
      </form>
@endsection