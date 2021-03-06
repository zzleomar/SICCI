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

                                            <tbody id="pruebaAjax"></tbody>
                                        </table>
                                    </div>
                                </div>
                             
                            </div>

                        </div>
@include('administrador.modalsComerciante')

</div>
        <!-- /#page-wrapper --> 
@endsection
            

@section('scripts')

<script type="text/javascript" src="{{ asset('js/validaciones-form.js') }}"></script>
<script type="text/javascript">
        var url = "{{ URL::TO('/administrador/comerciantes') }}";
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
            var url="{{ URL::to('/direccion/parroquias') }}/"+'1'+'/'+op; 
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
            var url="{{ URL::to('/direccion/parroquias') }}/"+'2'+'/'+op; 
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
    
</script>
<script src="/js/comerciantes-ajax.js"></script> 
@endsection
