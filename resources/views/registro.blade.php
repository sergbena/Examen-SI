@extends('layout.app')

@section('content')

      <form class="form-horizontal" method="post" action="registrar">
        
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Email address</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputPassword" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Confirm Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Password" required name='confirm'>
          </div>
        </div> 
        
        
        <div class="form-group">
          <label for="" class="col-sm-2 control-label">nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="nombre" required name='nombre'>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">Apellidos</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="apellidos" required name='apellidos'>
          </div>
        </div>
        
        <div class="checkbox col-sm-offset-2">
          <label>
            <input type="checkbox" value="acepto"> Acepto <blue>terminos y condiciones</blue>
          </label>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2">
          <button class="btn  btn-primary" type="submit">Enviar</button>
          <button class="btn ">Limpiar</button>
          </div>
          
        </div>
        {{csrf_field()}}
      </form>

    
@endsection()