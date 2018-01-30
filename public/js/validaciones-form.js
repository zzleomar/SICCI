document.write('<script src="/js/ajaxForm.js"></script>');
function formNuevoComerciante(action)
{
				return ajaxfnuevoComerciante(action);
	if(registroComerciante()){
    	if(registroLocal()){
    		if(registroProducto()){
    			return false;
				return ajaxfnuevoComerciante(action);
    		}
    		else{
    			return false;
    		}
    	}
    	else{
        	$("#BotonGuardarComerciante").css("display", "none");
     		$("#BotonContinuarGuardarComerciante2").css("display", "initial"); 
     		$('#collapseComercianteNew3').collapse('toggle');
    		$('#collapseComercianteNew2').collapse('toggle');
    		return false;
    	}
     } 
     else{
        $('#collapseComercianteNew1').collapse('toggle');
        $('#collapseComercianteNew3').collapse('toggle');
        $("#BotonContinuarGuardarComerciante1").css("display", "initial"); 
        $("#BotonGuardarComerciante").css("display", "none");
    		return false;

     }
	/*var json ={
		"0":{
			"id":"cedula",
			"value":$('input:text[name=cedula]').val()
		},
		"1":{
			"id":"email",
			"value":$('input:text[name=email]').val()
		},
		"2":{
			"id":"nombre",
			"value":$('input:text[name=nombre]').val()
		},
		"3":{
			"id":"apellido",
			"value":$('input:text[name=apellido]').val()
		},
		"4":{
			"id":"tlfM",
			"value":$('input:text[name=tlfM]').val()
		},
		"5":{
			"id":"tlfF",
			"value":$('input:text[name=tlfF]').val()
		},
		"6":{
			"id":"estadoC",
			"value":$('select[name=estadoC] option:selected').val()
		},
		"7":{
			"id":"municipioC",
			"value":$('select[name=municipioC] option:selected').val()
		},
		"8":{
			"id":"parroquia1",
			"value":$('select[name=parroquia1] option:selected').val()
		},
		"9":{
			"id":"ubicacion",
			"value":$('input:text[name=ubicacion]').val()
		},
		"10":{
			"id":"carnet",
			"value":$('input:text[name=carnet]').val()
		},
		"11":{
			"id":"estadoL",
			"value":$('select[name=estadoL] option:selected').val()
		},
		"12":{
			"id":"municipioL",
			"value":$('select[name=municipioL] option:selected').val()
		},
		"13":{
			"id":"parroquia2",
			"value":$('select[name=parroquia2] option:selected').val()
		},
		"14":{
			"id":"zona",
			"value":$('select[name=zona] option:selected').val()
		},
		"15":{
			"id":"familia",
			"value":$('select[name=familia] option:selected').val()
		},
		"16":{
			"id":"producto",
			"value":$('select[name=producto] option:selected').val()
		}

	}
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


	var estadoL=$('select[name=estadoL] option:selected').val();
	var municipioL=$('select[name=municipioL] option:selected').val();
	var parroquia2=$('select[name=parroquia2] option:selected').val();
	var zona=$('select[name=zona] option:selected').val();



	var familia=$('select[name=familia] option:selected').val();
	var producto=$('select[name=producto] option:selected').val();*/

/*
  if(!piloto){
    document.getElementById('BotonPlanificarVuelo').disabled=false;
    alert("Asigne un piloto al vuelo");
    return false;
  }
  else{
    if(!copiloto){
      document.getElementById('BotonPlanificarVuelo').disabled=false;
      alert("Asigne un copiloto al vuelo");
            return false;

    }
    else{
      if(!jefac){
        document.getElementById('BotonPlanificarVuelo').disabled=false;
        alert("Asigne un jefe de cabina al vuelo");
            return false;

      }
      else{
        if(!aeronave){
            document.getElementById('BotonPlanificarVuelo').disabled=false;
            alert("Asigne una aeronave al vuelo");
            return false;

        }
        else{
          if(num<3){
            document.getElementById('BotonPlanificarVuelo').disabled=false;
            alert("Asigne "+(3-num)+" sobrecargos al vuelo");
            return false;

          }
          else{
            document.getElementById('FormProgramarVuelo').action = action;
            return true;
          }
        }
      }
    }
  }*/
}

function continuar(boton){
        if(boton==1){
            if(registroComerciante()){
            	//ajaxnuevoComerciante();
            	$('#collapseComercianteNew1').collapse('toggle');
            	$('#collapseComercianteNew2').collapse('toggle');
             	$("#BotonContinuarGuardarComerciante1").css("display", "none"); 
             	$("#BotonContinuarGuardarComerciante2").css("display", "initial"); 
            }
        }
        else{
            if(registroLocal()){
            	if(registroComerciante()){
		            $('#collapseComercianteNew2').collapse('toggle');
		            $('#collapseComercianteNew3').collapse('toggle');
		             $("#BotonContinuarGuardarComerciante2").css("display", "none"); 
		             $("#BotonGuardarComerciante").css("display", "initial");
            	}
            	else{
            		$("#BotonContinuarGuardarComerciante1").css("display", "initial"); 
             		$("#BotonContinuarGuardarComerciante2").css("display", "none"); 
             		$('#collapseComercianteNew1').collapse('toggle');
            		$('#collapseComercianteNew2').collapse('toggle');
            	}
             } 
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

function registroProducto(){
	var familia=$('select[name=familia] option:selected').val();
	var producto=$('select[name=producto] option:selected').val();
	var uni=$('select[name=uni] option:selected').val();
	var Datosunidades=$('input[name=Datosunidades]').val();
	var precio_adqui=$('input[name=precio_adqui]').val();
	var precio_venta=$('input[name=precio_venta]').val();
	if(!familia){
        toastr.warning('Debe seleccionar la familia del producto', 'Warning Alert', {timeOut: 7500});
        return false;
	}
	else{ if(!producto){
		toastr.warning('Debe seleccionar el producto', 'Warning Alert', {timeOut: 7500});
        return false;

	}if(!uni){
        toastr.warning('Debe ingresar la unidad de medida', 'Warning Alert', {timeOut: 7500});
        return false;
	}
	else{ if(!Datosunidades){
		toastr.warning('Debe ingresar la cantidad de productos', 'Warning Alert', {timeOut: 7500});
        return false;

	} 
	else{ if(!precio_adqui){
		toastr.warning('Debe ingresar el precio de adquicisión', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!precio_venta){
		toastr.warning('Debe ingresar el precio de venta', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	}}}}return true;
}

function registroLocal(){
	var estadoC=$('select[name=estadoL] option:selected').val();
	var municipioC=$('select[name=municipioL] option:selected').val();
	var parroquia1=$('select[name=parroquia2] option:selected').val();
	var zona=$('select[name=zona]').val();
	if(!estadoC){
        toastr.warning('Debe ingresar el estado de la dirección del local', 'Warning Alert', {timeOut: 7500});
        return false;
	}
	else{ if(!municipioC){
		toastr.warning('Debe ingresar el municipio de la dirección del local', 'Warning Alert', {timeOut: 7500});
        return false;

	} 
	else{ if(!parroquia1){
		toastr.warning('Debe ingresar la parroquia de la dirección del local', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!zona){
		toastr.warning('Debe ingresar la zona de la dirección del local', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	}}}return true;
}
function registroComerciante(){
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
	if(!cedula){
        toastr.warning('Debe ingresar la cédula del comerciante', 'Warning Alert', {timeOut: 7500});
        return false;
	}
	else{ if(!email){
		toastr.warning('Debe ingresar el email del comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	} 
	else{ if(!nombre){
		toastr.warning('Debe ingresar el nombre del comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!apellido){
		toastr.warning('Debe ingresar el apellido del comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if((!tlfM)&&(!tlfF)){
		toastr.warning('Debe ingresar un número de contacto  del comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!estadoC){
		toastr.warning('Debe seleccionar el estado donde pertenece el comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!municipioC){
		toastr.warning('Debe seleccionar el municipio donde pertenece el comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!parroquia1){
		toastr.warning('Debe seleccionar la parroquia donde pertenece el comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!ubicacion){
		toastr.warning('Debe ingresar la ubicación del comerciante', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{ if(!carnet){
		toastr.warning('Debe ingresar el Nro. del carnet de la patria', 'Warning Alert', {timeOut: 7500});
        return false;

	}
	else{

	}
	} } } } } } } } } 
	return true;
} 

function soloNum(e){

    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if ((tecla==8)||(tecla==0)){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


function soloNumDec(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if ((tecla==8)||(tecla==0)){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9-.]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}