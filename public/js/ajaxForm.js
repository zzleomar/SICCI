$.ajaxSetup({

    headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

});

function ajaxfnuevoComerciante(action){

    var form_action = action;

    var cedula=$('input:text[name=cedula]').val();
	var email=$('input:text[name=email]').val();
	var nombre=$('input:text[name=nombre]').val();
	var apellido=$('input:text[name=apellido]').val();
	var tlfM=$('input:text[name=tlfM]').val();
	var tlfF=$('input:text[name=tlfF]').val();
	var estadoC=$('select[name=estadoC] option:selected').val();
	var municipioC=$('select[name=municipioC] option:selected').val();
	var parroquia1=$('select[name=parroquia1] option:selected').val();
	var ubicacion=$('input:text[name=ubicacion]').val();
	var carnet=$('input:text[name=carnet]').val();


	var estadoC=$('select[name=estadoL] option:selected').val();
	var municipioC=$('select[name=municipioL] option:selected').val();
	var parroquia1=$('select[name=parroquia2] option:selected').val();
	var zona=$('select[name=zona]').val();


	var familia=$('select[name=familia] option:selected').val();
	var producto=$('select[name=producto] option:selected').val();
	var uni=$('select[name=uni] option:selected').val();
	var Datosunidades=$('input[name=Datosunidades]').val();
	var precio_adqui=$('input[name=precio_adqui]').val();
	var precio_venta=$('input[name=precio_venta]').val();

   


    $.ajax({

        dataType: 'json',

        type:'POST',

        url: form_action,

        data:{cedula:cedula,email:email,nombre:nombre,apellido:apellido,tlfM:tlfM,tlfF:tlfF,
        	estadoC:estadoC,municipioC:municipioC,parroquia1:parroquia1,ubicacion:ubicacion,carnet:carnet,estadoC:estadoC,municipioC:municipioC,
        	parroquia1:parroquia1,zona:zona,familia:familia,producto:producto,uni:uni,Datosunidades:Datosunidades,precio_adqui:precio_adqui,precio_venta:precio_venta}

    }).done(function(data){
        if(data.cedula==0){
            toastr.error('Ocurrio un error inesperado.', 'Error Alert', {timeOut: 5000});
        }
        else{
            getPageData();
            $(".modal").modal('hide');
            toastr.success('El nuevo comerciante ha sido Registrado', 'Success Alert', {timeOut: 5000});
        }
        

    });
    return false;
    
    $('input:text[name=cedula]').val("");
    $('input:text[name=email]').val("");
    $('input:text[name=nombre]').val("");
    $('input:text[name=apellido]').val("");
    $('input:text[name=tlfM]').val("");
    $('input:text[name=tlfF]').val("");
    $('select[name=estadoC] option:selected').val("");
    $('select[name=municipioC] option:selected').val("");
    $('select[name=parroquia1] option:selected').val("");
    $('input:text[name=ubicacion]').val("");
    $('input:text[name=carnet]').val("");


    $('select[name=estadoL] option:selected').val("");
    $('select[name=municipioL] option:selected').val("");
    $('select[name=parroquia2] option:selected').val("");
    $('select[name=zona]').val()="";


    $('select[name=familia] option:selected').val("");
    $('select[name=producto] option:selected').val("");
    $('select[name=uni] option:selected').val("");
    $('input[name=Datosunidades]').val("");
    $('input[name=precio_adqui]').val("");
    $('input[name=precio_venta]').val("");

}