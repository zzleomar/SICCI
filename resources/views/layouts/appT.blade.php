<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SICCI - Sistema de Información para el Control del Comercio Informal</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('template/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('template/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('template/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/personalesT.css') }}" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Nombre Usuario<b class="caret"></b></a>
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i>Incio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Comerciantes</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i>Productos</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i> Estacionamiento</a>
                    </li>
                    <li>
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
                    <li>
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

               <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->
<div class="row" style="margin-top: 10px;">
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/comerciantes') }}"><div class="panel panel-primary text-center no-boder bg-color-blue" id="icon-P">
                          <div class="panel-body">
                              <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                              <h3>1.457</h3>
                          </div>
                          <div class="panel-footer back-footer-blue">
                              Comerciantes

                          </div>
                      </div></a>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/ventas') }}"><div class="panel panel-primary text-center no-boder bg-color-green" id="icon-P">
                          <div class="panel-body">
                              <i class="fa fa-money fa-5x"></i>
                              <h3>52.160 </h3>
                          </div>
                          <div class="panel-footer back-footer-green">
                              Ventas Registradas

                          </div>
                      </div></a>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/productos') }}"><div class="panel panel-primary text-center no-boder bg-color-crim" id="icon-P">
                          <div class="panel-body">
                              <i class="fa fa fa-shopping-cart fa-5x"></i>
                              <h3>1.823 </h3>
                          </div>
                          <div class="panel-footer back-footer-crim">
                              Productos

                          </div>
                      </div></a>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/comercios') }}"><div class="panel panel-primary text-center no-boder bg-color-chart" id="icon-P">
                          <div class="panel-body">
                              <i class="fa fa-users fa-5x"></i>
                              <h3>36.752 </h3>
                          </div>
                          <div class="panel-footer back-footer-chart">
                              Comercios

                          </div>
                      </div></a>
                  </div>
              </div>
                
                <!-- /.row -->

                <div class="row" style="margin-top: 20px;">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Notificaciones
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a class="list-group-item backgroun2 col-hover2" data-toggle="modal" data-target="#NotificacionesModal" href="#">
                                        <span class="badge">Hace 7 min</span>
                                        <i class="fa fa-fw fa-shopping-cart"></i> Nuevo producto
                                    </a>
                                    <a class="list-group-item backgroun2 col-hover2" data-toggle="modal" data-target="#NotificacionesModal" href="#">
                                        <span class="badge">Hace 18 min</span>
                                        <i class="fa fa-fw fa-dollar"></i> Nuevo registro de ventas
                                    </a>
                                    <a class="list-group-item backgroun2 col-hover2" data-toggle="modal" data-target="#NotificacionesModal" href="#">
                                        <span class="badge">Hace 39 min</span>
                                        <i class="fa fa-fw fa-user"></i> Actualización de información personal de José Doe
                                    </a>
                                    <a class="list-group-item backgroun2 col-hover2" data-toggle="modal" data-target="#NotificacionesModal" href="#">
                                        <span class="badge">Hace 1 hora</span>
                                        <i class="fa fa-fw fa-user"></i> Se elimino un comercio
                                    </a>
                                    <a class="list-group-item backgroun2 col-hover2" data-toggle="modal" data-target="#NotificacionesModal" href="#">
                                        <span class="badge">Hace 39 min</span>
                                        <i class="fa fa-fw fa-user"></i> Actualización de información personal de Andrea Surita
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">Ver más<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>


                  <div class="col-md-8 col-sm-12 col-xs-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Nuevos Productos Cargados
                                </div> 
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Comerciante</th>
                                                    <th>Producto</th>
                                                    <th>Cantidad</th>
                                                    <th>Costo de Adquisición</th>
                                                    <th>Costo de Venta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal">
                                                    <td>John Doe</td>
                                                    <td>Sardina Enlatada</td>
                                                    <td>100 uni.</td>
                                                    <td>35,800</td>
                                                    <td>46,000</td>
                                                </tr>
                                            </tbody><tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal">
                                                    <td>Kimsila Orieal</td>
                                                    <td>maiz enlatado</td>
                                                    <td>80 uni.</td>
                                                    <td>54,800</td>
                                                    <td>80,000</td>
                                                </tr>
                                            </tbody><tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal">
                                                    <td>Richard Doe</td>
                                                    <td>Latas de pintura</td>
                                                    <td>120 uni.</td>
                                                    <td>134,800</td>
                                                    <td>150,000</td>
                                                </tr>
                                            </tbody><tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal">
                                                    <td>Jacob Dere</td>
                                                    <td>Carton de huevos</td>
                                                    <td>100 uni.</td>
                                                    <td>185,800</td>
                                                    <td>210,000</td>
                                                </tr>
                                            </tbody><tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal">
                                                    <td>John Doe</td>
                                                    <td>Harina de maiz</td>
                                                    <td>300 uni.</td>
                                                    <td>34,800</td>
                                                    <td>50,000</td>
                                                </tr>
                                            </tbody><tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal">
                                                    <td>John Doe</td>
                                                    <td>Harina de maiz</td>
                                                    <td>300 uni.</td>
                                                    <td>34,800</td>
                                                    <td>50,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                  <nav aria-label="Page navigation example" id="pagNum">
                                <ul class="pagination justify-content-center pagination-sm">
                                <li class="page-item"><a class="page-link" href="#">Previo</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Sig</a></li>
                                </ul>
                                </nav>
                            </div>
                        </div>
              </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
              @include('administrador.modalsProducto')

    <script src="{{ asset('template/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('template/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/morris/morris-data.js') }}"></script>

</body>

</html>
