@extends('layouts.app')

@section('content')

<div id="wallpapel"></div>
<div class="container" id="mainC">
	
	 <div class="row" style="">
     <!--           <div class="col-md-4 col-sm-12 col-xs-12 wrapper">
   
    <div class="jcarousel-wrapper">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="/img/img1.gif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="/img/img2.gif" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="/img/img3.gif" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div></div>-->
                  <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Notificaciones
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 7 min</span>
                                        <i class="fa fa-fw fa-shopping-cart"></i> Nuevo producto
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 18 min</span>
                                        <i class="fa fa-fw fa-dollar"></i> Nuevo registro de ventas
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 39 min</span>
                                        <i class="fa fa-fw fa-user"></i> Actualización de información personal
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 1 hora</span>
                                        <i class="fa fa-fw fa-user"></i> Se elimino un comercio
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">Hace 1 hora con 20 min</span>
                                        <i class="fa fa-fw fa-globe"></i> Una nueva Carga de producto
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
                                        Comerciantes
                                    </div>                                  
                                            <button data-toggle="modal" data-target="#NuevaComercianteModal" class="btn btn-lg btn-outline-success" style="    position: absolute; right: 15px; top: 3px;">Nuevo</button>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-dark table-hover">
                                            <thead>
                                                <tr>
                                                    <th>.</th>
                                                    <th>Comerciante</th>
                                                    <th>Actividad Comercial</th>
                                                    <th>Productos registrados</th>
                                                    <th>Ventas</th>
                                                </tr>
                                            </thead>
                                            <tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>1580403</td>
                                                    <td>John Doe</td>
                                                    <td>Agricola</td>
                                                    <td>100</td>
                                                    <td>203040,00 Bs.</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                            	<tr class="col-hover">
                                                    <td>862306</td>
                                                    <td>Richard Ald</td>
                                                    <td>Artesano</td>
                                                    <td>264</td>
                                                    <td>1502346,00 Bs.</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>1344403</td>
                                                    <td>Dere John</td>
                                                    <td>Bienes de Consumo</td>
                                                    <td>164</td>
                                                    <td>5000400,00 Bs.</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>9261493</td>
                                                    <td>John Dere</td>
                                                    <td>Artesano</td>
                                                    <td>164</td>
                                                    <td>5000400,00 Bs.</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>18364149</td>
                                                    <td>Frank Sat</td>
                                                    <td>Pesquero</td>
                                                    <td>320</td>
                                                    <td>223650,00 Bs</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>10344511</td>
                                                    <td>Jhan Tuly</td>
                                                    <td>Textiles</td>
                                                    <td>75</td>
                                                    <td>501343,00 Bs</td>
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

@include('administrador.modalsComerciante')
</div>

@endsection
