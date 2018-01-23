@extends('layouts.appT')

@section('content')
  
    <div class="container" id="container-sesion">
<div>
        <div class="row" >
            <div class="col-sm-6 col-md-4 col-md-offset-4" id="containersesion" style="    BOX-SHADOW: 6PX 5PX 6PX #000000;
    BORDER-RADIUS: 10PX;" >

                <div class="card card-default py-3" style="border-radius: 15px;">  
            <div class="panel-heading text-center" style="font-weight: 700; margin-bottom: 5px;">INICIO DE SESIÓN</div>
                <div class="card-heading d-flex justify-content-center center-block">
                    <img src="{{ asset('img/icon-user-default.png') }}" alt="Usuario" class="img-circle img-responsive " style="    display: block; margin: auto; padding: 10px;">
                </div>  
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nro. Cédula</label>
            <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }} col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" name="cedula" placeholder="Cédula">
              @if ($errors->has('cedula'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cedula') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Contraceña</label>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-8">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
              @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">ENTRAR</button>
              <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                ¿Olvido su Contraseña?
            </a>
            </div>
          </div>
        </form>
        </div></div>
</div>

    </div>

  
        

    
    
    


@endsection
@section('scripts')
<script type="text/javascript">
    
$(document).ready(function(){

  var altura = $(document).height();
  altura=(altura/2)-300;
  altura=altura+"px";
  $("#container-sesion").css("margin-top",altura);

});

</script>
@endsection