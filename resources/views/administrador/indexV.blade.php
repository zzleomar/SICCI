@extends('layouts.app')

@section('content')
<div id="wallpapel"></div>
<div class="container" id="mainC">
    <div class="row" style="margin-top: 10px;">
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/comerciantes') }}"><div class="panel panel-primary text-center no-boder bg-color-blue" style="padding: 7px;">
                          <div class="panel-body">
                              <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                              <h3>1,457</h3>
                          </div>
                          <div class="panel-footer back-footer-blue">
                              Comerciantes

                          </div>
                      </div></a>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                       <a href="{{ URL::to('/administrador/comerciantes') }}"><div class="panel panel-primary text-center no-boder bg-color-green">
                          <div class="panel-body">
                              <i class="fa fa-money fa-5x"></i>
                              <h3>52,160 </h3>
                          </div>
                          <div class="panel-footer back-footer-green">
                              Ventas Registradas

                          </div>
                      </div></a>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/productos') }}"><div class="panel panel-primary text-center no-boder bg-color-crim">
                          <div class="panel-body">
                              <i class="fa fa fa-shopping-cart fa-5x"></i>
                              <h3>1,823 </h3>
                          </div>
                          <div class="panel-footer back-footer-crim">
                              Productos

                          </div>
                      </div></a>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                      <a href="{{ URL::to('/administrador/productos') }}"><div class="panel panel-primary text-center no-boder bg-color-chart">
                          <div class="panel-body">
                              <i class="fa fa-users fa-5x"></i>
                              <h3>36,752 </h3>
                          </div>
                          <div class="panel-footer back-footer-chart">
                              Comercios

                          </div>
                      </div></a>
                  </div>
              </div>
              <div class="row" style="margin-top: 20px;">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                        <a href="{{ URL::to('/administrador/comerciantes') }}"><div class="panel panel-default">
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
                        </div></a>

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
                                  <nav aria-label="Page navigation example">
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
              @include('administrador.modalsProducto')
</div>
@endsection
