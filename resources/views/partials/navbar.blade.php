<!-- Navigation -->
            <!-- Brand and toggle get grouped for better mobile display -->
          @guest
              <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">SICCI</a>
                  </div>
            </nav>

           @else
    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menú de Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SICCI</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Nueva carga <span class="label label-primary">12 min</span></a>
                        </li>
                        <li>
                            <a href="#">Actualización <span class="label label-success"> 35 min</span></a>
                        </li>
                        <li>
                            <a href="#">Nueva venta <span class="label label-info">37 min</span></a>
                        </li>
                        <li>
                            <a href="#">Estacionamiento al limite <span class="label label-danger">1 hra</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Ver más</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                                   
                                    {{ Auth::user()->tipo.": ".Auth::user()->nombres." ".Auth::user()->apellidos }}  


                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Productos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>

                        <li>
                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" class="dropdown-item">
                                    <i class="fa fa-power-off" aria-hidden="true"></i> Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li id="indexAdmin">
                        <a href="{{ URL::to('/administrador')}}"><i class="fa fa-fw fa-dashboard"></i>Incio</a>
                    </li>
                    <li  id="ComercianteAdmin">
                        <a href="{{ URL::to('/administrador/comerciante')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Comerciantes</a>
                    </li>
                    <li  id="LocalAdmin">
                        <a href="{{ URL::to('/administrador/local')}}"><i class="fa fa-bars fa-bar-chart-o"></i> Locales</a>
                    </li>
                    <li  id="ProductosAdmin">
                        <a href="{{ URL::to('/administrador/productos')}}"><i class="fa fa-fw fa-table"></i> Productos</a>
                    </li>
                    <li  id="EstaciomientoAdmin">
                        <a href="#"><i class="fa fa-car fa-edit"></i> Estacionamiento</a>
                    </li>
                    <li  id="ZonasAdmin">
                        <a href="javascript:;" data-toggle="collapse" data-target="#zonasCollapse"><i class="fa fa-fw fa-arrows-v"></i>Zonas de Comercio<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="zonasCollapse" class="collapse">
                            <li>
                                <a href="#">Ver</a>
                            </li>
                            <li>
                                <a href="#">Registrar</a>
                            </li>
                        </ul>
                    </li>
                    <li  id="ActividadAdmin">
                        <a href="javascript:;" data-toggle="collapse" data-target="#actividadCollapse"><i class="fa fa-fw fa-arrows-v"></i>Actividades de Comercio<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="actividadCollapse" class="collapse">
                            <li>
                                <a href="#">Ver</a>
                            </li>
                            <li>
                                <a href="#">Registrar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Administrador <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
          @endguest


        