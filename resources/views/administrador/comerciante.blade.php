@extends('layouts.appT')

@section('content')

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
                          {!! $comerciantes->render() !!}
                             
                            </div>

                        </div>
@include('administrador.modalsComerciante')

</div>
        <!-- /#page-wrapper --> 
@endsection
            

@section('scripts')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script type="text/javascript">

function CargarComerciante(idUser){
        var url="{{ URL::to('/administrador/comerciantes/ajax') }}/"+idUser; 
      //alert(url);
        $.get(url,function(data){ 
          $('#ModalAjaxModificarComerciante').empty().html(data);
        }); 
    }

    $(document).ready(function(){
        $("#selectmun").change(function(){
            var op = $("#selectmun option:selected").val();
            var url="{{ URL::to('/direccion/parroquias') }}/"+op; 
             //alert(url);
                $.get(url,function(data){ 
                  $('#parroquiaAjaxC').empty().html(data);
                }); 
            });
        $("#slectParroquia").change(function(){
             $("#ubiAjax").css("display", "initial"); 
        });
         $("#selectmun2").change(function(){
            var op = $("#selectmun2 option:selected").val();
            var url="{{ URL::to('/direccion/parroquias') }}/"+op; 
             //alert(url);
                $.get(url,function(data){ 
                  $('#parroquiaAjaxC2').empty().html(data);
                }); 
            });
         $("#familiaSelect").change(function(){
            var op = $("#familiaSelect option:selected").val();
            var url="{{ URL::to('/producto') }}/"+op; 
             //alert(url);
                $.get(url,function(data){ 
                  $('#productoAjaxC').empty().html(data);
                }); 
            });
        });
    function continuar(boton){
        if(boton==1){
            $('#collapseComercianteNew1').collapse('toggle');
            $('#collapseComercianteNew2').collapse('toggle');
             $("#BotonContinuarGuardarComerciante1").css("display", "none"); 
             $("#BotonContinuarGuardarComerciante2").css("display", "initial"); 
        }
        else{
            $('#collapseComercianteNew2').collapse('toggle');
            $('#collapseComercianteNew3').collapse('toggle');
             $("#BotonContinuarGuardarComerciante2").css("display", "none"); 
             $("#BotonGuardarComerciante").css("display", "initial"); 
        }
      }
      function cambio(opc){
        if(opc==1){
            $('#collapseComercianteNew1').collapse('toggle');
            $('#collapseComercianteNew2').collapse('hide');
            $('#collapseComercianteNew3').collapse('hide');
             $("#BotonContinuarGuardarComerciante1").css("display", "initial"); 
             $("#BotonGuardarComerciante").css("display", "none"); 
             $("#BotonContinuarGuardarComerciante2").css("display", "none"); 
        }
        else{
            if(opc=='2'){
                $('#collapseComercianteNew2').collapse('toggle');
            $('#collapseComercianteNew1').collapse('hide');
            $('#collapseComercianteNew3').collapse('hide');
             $("#BotonGuardarComerciante").css("display", "none"); 
             $("#BotonContinuarGuardarComerciante1").css("display", "none"); 
             $("#BotonContinuarGuardarComerciante2").css("display", "initial"); 
            }
            else{
                $('#collapseComercianteNew2').collapse('hide');
            $('#collapseComercianteNew1').collapse('hide');
            $('#collapseComercianteNew3').collapse('toggle');
             $("#BotonGuardarComerciante").css("display", "initial"); 
             $("#BotonContinuarGuardarComerciante1").css("display", "none"); 
             $("#BotonContinuarGuardarComerciante2").css("display", "none"); 
            }
        }
      }
</script>
@endsection
