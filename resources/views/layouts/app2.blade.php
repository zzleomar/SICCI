<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com/docs/4.0/examples/navbar-top/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Control para Comerciantes Informarles</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-styles.css') }}">
    <link href="{{ asset('css/personales.css') }}" rel="stylesheet">
  </head>

  <body>
<div class="wrapper" style="width: 100%;">
  
  <!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
          <div>
              <div> <a class="navbar-brand" href="#" style="color: dodgerblue;margin-left: 20px;">SICCI-ADMIN</a></div>
              <div>
                <ul class="nav justify-content-end" style="margin-top: 5px;margin-right: 10px;">

              <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="    padding: 0px;margin: 0px;color: floralwhite;">
                    
                          Administrador Leomar E.                           
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

                      <form id="logout-form" action="#" method="POST" style="display: none;">
                      </form>
              </li>
          </ul></div>
          </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comerciantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Registro de Ventas</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="nombre del Producto" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
                  
    </div>
  </nav>-->

<nav class="navbar navbar-default top-navbar" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Dream</a>
          </div>

          <ul class="nav navbar-top-links navbar-right">
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      <i class="fa fa-envelope fa-fw"></i> 
                  </a>
                  <ul class="dropdown-menu dropdown-messages">
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Doe</strong>
                                  <span class="pull-right text-muted">
                                      <em>Today</em>
                                  </span>
                              </div>
                              <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <strong>John Smith</strong>
                                  <span class="pull-right text-muted">
                                      <em>Yesterday</em>
                                  </span>
                              </div>
                              <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>Read All Messages</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-messages -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      <i class="fa fa-tasks fa-fw"></i> 
                  </a>
                  <ul class="dropdown-menu dropdown-tasks">
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 1</strong>
                                      <span class="pull-right text-muted">60% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (success)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 2</strong>
                                      <span class="pull-right text-muted">28% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                          <span class="sr-only">28% Complete</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 3</strong>
                                      <span class="pull-right text-muted">60% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <p>
                                      <strong>Task 4</strong>
                                      <span class="pull-right text-muted">85% Complete</span>
                                  </p>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                          <span class="sr-only">85% Complete (danger)</span>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>See All Tasks</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-tasks -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                      <i class="fa fa-bell fa-fw"></i> 
                  </a>
                  <ul class="dropdown-menu dropdown-alerts">
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-comment fa-fw"></i> New Comment
                                  <span class="pull-right text-muted small">4 min</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                  <span class="pull-right text-muted small">12 min</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-envelope fa-fw"></i> Message Sent
                                  <span class="pull-right text-muted small">4 min</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-tasks fa-fw"></i> New Task
                                  <span class="pull-right text-muted small">4 min</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <div>
                                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                  <span class="pull-right text-muted small">4 min</span>
                              </div>
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a class="text-center" href="#">
                              <strong>See All Alerts</strong>
                              <i class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
                  <!-- /.dropdown-alerts -->
              </li>
              <!-- /.dropdown -->
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" id="dropdownUser" aria-haspopup="true">
                <ul class="dropdown-menu" aria-labelledby="dropdownUser">
                  <li class="dropdown-item"><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                  </li>
                  <li class="dropdown-item"><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                  </li>
                  <li class="divider dropdown-item"></li>
                  <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                  </li>
                </ul>
              </li>
              <!-- /.dropdown -->
          </ul>
      </nav>

  <div class="row" style="margin-top: 10px;">
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <div class="panel panel-primary text-center no-boder bg-color-green">
                          <div class="panel-body">
                              <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                              <h3>1,457</h3>
                          </div>
                          <div class="panel-footer back-footer-green">
                              Comerciantes

                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <div class="panel panel-primary text-center no-boder bg-color-blue">
                          <div class="panel-body">
                              <i class="fa fa-dollar fa-5x"></i>
                              <h3>52,160 </h3>
                          </div>
                          <div class="panel-footer back-footer-blue">
                              Ventas Registradas

                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <div class="panel panel-primary text-center no-boder bg-color-red">
                          <div class="panel-body">
                              <i class="fa fa fa-shopping-cart fa-5x"></i>
                              <h3>1,823 </h3>
                          </div>
                          <div class="panel-footer back-footer-red">
                              Productos

                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <div class="panel panel-primary text-center no-boder bg-color-brown">
                          <div class="panel-body">
                              <i class="fa fa-users fa-5x"></i>
                              <h3>36,752 </h3>
                          </div>
                          <div class="panel-footer back-footer-brown">
                              No. of Visits

                          </div>
                      </div>
                  </div>
              </div>
</div> 


    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/morris/morris.js') }} "></script>
  
  

</body></html>