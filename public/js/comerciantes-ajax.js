var page = 1;

var current_page = 1;

var total_page = 0;

var is_ajax_fire = 0;

manageData();


function manageData() {



    $.ajax({

        dataType: 'json',

        url: url,

        data: {page:page}

    }).done(function(data){




    	manageRow(data.data);

        is_ajax_fire = 1;

    });

}




$.ajaxSetup({

    headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

});

function getPageData() {

	$.ajax({

    	dataType: 'json',

    	url: url,

    	data: {page:page}

	}).done(function(data){

		manageRow(data.data);

	});

}

/* Add new Post table row */

function manageRow(data) {

	var	rows = '';

	$.each( data, function( key, value ) {
		var funcion='onclick="'+'CargarComerciante('+value.id+')"';
	  	rows = rows + '<tr class="col-hover" data-toggle="modal" data-target="#ComercianteModal"'+funcion+'>';

	  	rows = rows + '<td>'+value.cedula+'</td>';

	  	rows = rows + '<td>'+value.nombres+' '+value.apellidos+'</td>';

	  	rows = rows + '<td>'+value.locales+'</td>';

	  	rows = rows + '<td>'+value.cantidad+'</td>';

	  	rows = rows + '<td>'+value.vendidos+'</td>';

        rows = rows + '</tr>';


	});

	$("#pruebaAjax").html(rows);

}


/* Create new Post */

$(".crud-submit").click(function(e){

    e.preventDefault();

    var form_action = $("#create-item").find("form").attr("action");

    var cedula = $("#create-item").find("input[name='cedula']").val();
    var estado = $("#create-item").find("select[name='estado']").val();
    var municipio = $("#create-item").find("select[name='municipio']").val();
    var parroquia = $("#create-item").find("select[name='parroquia']").val();
    var zona = $("#create-item").find("select[name='zona']").val();


    $.ajax({

        dataType: 'json',

        type:'POST',

        url: form_action,

        data:{cedula:cedula,estado:estado,municipio:municipio,parroquia:parroquia,zona:zona}

    }).done(function(data){
        if(data.cedula==0){
            toastr.error('Ocurrio un error durante la operación.', 'Error Alert', {timeOut: 5000});
        }
        else{
            getPageData();
            $(".modal").modal('hide');
            toastr.success('El nuevo comerciante se ha Registrado', 'Success Alert', {timeOut: 5000});
        }
        

    });

});
