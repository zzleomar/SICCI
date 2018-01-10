<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SICCI') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
    <header class="header sticky-top fondo-header"> 
        
                        {{--  Links de autenticacion  --}}                
                        @guest
                            <ul class="nav justify-content-end" style="margin-top: 5px;margin-right: 10px;">

                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Inicio de Sesión</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                          </li>
                        </ul>
                        @else
                    <ul class="nav justify-content-end" style="margin-top: 5px;margin-right: 10px;">

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                              
                                    {{ Auth::user()->tipo.": ".Auth::user()->nombres." ".Auth::user()->apellidos }}                              
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">                          <a href="#" class="dropdown-item">
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-user" aria-hidden="true"></i> Perfil                  
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-lock" aria-hidden="true"></i> Cambiar contraseña       
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="dropdown-item">
                                    <i class="fa fa-power-off" aria-hidden="true"></i> Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                        @endguest


                </div>  {{-- Final del div collapse --}}
                
                <div class="collapse navbar-collapse" id="" style="clear: both;">
<hr>

                </div>


        
        @yield('content')
    </header>

    <!-- Scripts -->
</body>
</html>
