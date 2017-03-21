@extends('layout.app')

@section('content')
    <form class="form-horizontal" method="post" action="saveNota">
        
        <div class="form-group">
            <label for="" class="col-sm-2 control-label" >Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Titulo" required name='titulo'>
            </div>
        </div>
        
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Cuerpo</label>
            <div class="col-sm-10">
                <textarea rows='5' class="form-control" placeholder="Cuerpo de nota" name='cuerpo' required>
                </textarea>
            </div>
        </div>
        
        <div class="col-sm-offset-2">
            <button class="btn btn-primary " type="submit">Enviar</button>
        </div>
        
        {{csrf_field()}}
      </form>
@endsection