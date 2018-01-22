@extends('layouts.appT')

@section('content')
<div class="container col-md-4" id="container-sesion">
            <div class="card card-default py-3" style="border-radius: 15px;">     
                <div class="panel-heading text-center
                " style="font-weight: 700; margin-bottom: 5px;">INICIO DE SESIÓN</div>

            <div class="card-heading d-flex justify-content-center ">
                    <img src="{{ asset('img/icon-user-default.png') }}" alt="Usuario" class="rounded-circle">
                </div>   

                    <form class="form-horizontal container" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-6 control-label">Nro. Cédula</label>

                            <div class="col-md-12">
                                <input id="cedula" type="cedula" class="form-control" name="cedula" value="{{ old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-6 control-label">Contraceña</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   ENTRAR
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvido su Contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
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