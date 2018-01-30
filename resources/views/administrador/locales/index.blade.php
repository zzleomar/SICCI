@extends('layouts.appT')

@section('content')

	<div class="container">



		<div class="row">

		    <div class="col-lg-12 margin-tb">					

		        <div class="pull-left">

		            <h2>Locales</h2>

		        </div>

		        <div class="pull-right">

				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Nuevo</button>

		        </div>

		    </div>

		</div>


<div class="divtablaAux" >
	
	<table class="table table-bordered tablaAux">

			<thead>

			    <tr>

				<th>Comerciante</th>
				<th>Zona</th>


				<th width="200px">Acción</th>

			    </tr>

			</thead>

			<tbody>

			</tbody>

		</table>
</div>
		








		<!-- Create Item Modal -->

		@include('administrador.locales.create')



		<!-- Edit Item Modal -->

		@include('administrador.locales.edit')




	</div>

	

@endsection


@section('scripts')
	<script type="text/javascript">
		var url = "<?php echo route('locales.index')?>";

    $(document).ready(function(){
        $("#selectmun2").change(function(){
            var op = $("#selectmun2 option:selected").val();
            var url="{{ URL::to('/direccion/parroquias') }}/"+'3'+'/'+op; 
             //alert(url);
                $.get(url,function(data){ 
                  $('#parroquiaAjaxC2').empty().html(data);
                }); 
            });

        
     });

        
	</script>
<script src="/js/locales-ajax.js"></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

@endsection
