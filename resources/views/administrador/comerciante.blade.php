@extends('layouts.app')

@section('content')

<div id="wallpapel"></div>
<div class="container" id="mainC">
	
                  <div class="col-md-12">

                            <div class="panel panel-default" >
                                   <button data-toggle="modal" data-target="#NuevaComercianteModal" class="btn btn-success" >Nuevo</button>
                                    <div class="">
                                        <table class="table" style="margin-bottom: 0px;">
                                          <thead class="thead-light">
                                            <tr align="center" >
                                              <th style="    font-size: 14px;">Administración de Comerciantes</th>
                                            </tr>
                                          </thead>
                                        </table>
        
                                    </div>                                  
                                            
                                <div class="" style="    margin-top: 0px;padding-top: 0px;">
                                    <div class="table-responsive divtablaAux">
                                        <table class="table table-striped table-dark table-hover tablaAux">
                                            <thead>
                                                <tr>
                                                    <th>Nro. Cedula</th>
                                                    <th>Comerciante</th>
                                                    <th>Locales</th>
                                                    <th>Productos registrados</th>
                                                    <th>Ventas</th>
                                                </tr>
                                            </thead>

                                            @php
                                                $ind=sizeof($comerciantes);
                                                for($i=0;$i<$ind;$i++){
                                                    $user=($comerciantes[$i]->DatosUser($comerciantes[$i]->user_id));
                                            @endphp
                                            <tbody data-toggle="modal" data-target="#ComercianteModal" onclick="CargarComerciante('{{ $user->id }}')">
                                                <tr class="col-hover">
                                                    <td>{{ $user->cedula }}</td>
                                                    <td>{{ $user->nombres." ".$user->apellidos }}</td>
                                                    <td>{{ $datosP[$i]['locales'] }}</td>
                                                    <td>{{ $datosP[$i]['cantidad'] }}</td>
                                                    <td>{{ $datosP[$i]['vendido'] }}</td>
                                                </tr>
                                            </tbody>
                                            @php
                                                }
                                            @endphp
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

@include('administrador.modalsComerciante')
</div>

<script type="text/javascript">
    $(document).ready(function(){
  var altura = $(document).height();
  altura=altura-380;
  altura=altura+"px";
  $(".divtablaAux").css("min-height",altura);
});
  
    function CargarComerciante(idUser){
        var url="{{ URL::to('/administrador/comerciantes/ajax') }}/"+idUser; 
      //alert(url);
        $.get(url,function(data){ 
          $('#ModalAjaxModificarComerciante').empty().html(data);
        }); 
    }
</script>

@endsection
