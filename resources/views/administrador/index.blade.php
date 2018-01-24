@extends('layouts.appT')
@section('styles')
{!! Charts::assets() !!}
@endsection
@section('content')

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
                 <!-- <div class="col-md-4 col-sm-12 col-xs-12">
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

                    </div>-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        {!! $chartjs->render() !!}
                    </div>


                  <div class="col-md-6 col-sm-12 col-xs-12">

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
                                            @foreach($recientes as $reciente)
                                            @php
                                              $personal=$reciente->local->comerciante->DatosUser($reciente->local->comerciante->user_id);
                                            @endphp
                                            <tbody>
                                                <tr class="col-hover" data-toggle="modal" data-target="#ProductoREVIWModal" onclick="modalCarga('{{$reciente->id}}')">
                                                    <td>{{ $personal->nombres." ".$personal->apellidos }}</td>
                                                    <td>{{ $reciente->producto->nombre }}</td>
                                                    <td>{{ $reciente->cantidad }}</td>
                                                    <td>{{ number_format($reciente->precio_adquirido, 2, ",", ".") }}</td>
                                                    <td>{{ number_format($reciente->precio_venta, 2, ",", ".") }}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                          {!! $recientes->render() !!}

                                  
                            </div>
                        </div>
              </div>
                <!-- /.row -->

            </div>
            </div>
        <!-- /#page-wrapper --> 
              @include('administrador.modalsProducto')
@endsection
            

@section('scripts')

  
<script type="text/javascript">

function modalCarga(idC){
  var url="{{ URL::to('/administrador/carga/reciente/ajax') }}/"+idC; 
       // alert(url);
         $.get(url,function(data){ 
            $('#ajax-carga-reciente').empty().html(data);
          });
}

</script>
@endsection
