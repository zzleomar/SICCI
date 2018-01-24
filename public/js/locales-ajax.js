var page = 1;

var current_page = 1;

var total_page = 0;

var is_ajax_fire = 0;




manageData();




/* manage data list */

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




/* Get Page Data*/

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
        console.log(value);
	  	rows = rows + '<tr>';

	  	rows = rows + '<td>'+value.cedula+'</td>';

	  	rows = rows + '<td>'+value.direccion+'</td>';

	  	rows = rows + '<td data-id="'+value.id+'">';

        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Modificar</button> ';

        rows = rows + '<button class="btn btn-danger remove-item">Eliminar</button>';

        rows = rows + '</td>';

	  	rows = rows + '</tr>';

	});

	$("tbody").html(rows);

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
            toastr.error('La cédula ingresada no se encuentra registrada.', 'Error Alert', {timeOut: 5000});
        }
        else{
            getPageData();
            $(".modal").modal('hide');
            toastr.success('El nuevo local se ha Registrado', 'Success Alert', {timeOut: 5000});
        }
        

    });

});




/* Remove Post */

$("body").on("click",".remove-item",function(){

    var id = $(this).parent("td").data('id');

    var c_obj = $(this).parents("tr");



    $.ajax({

        dataType: 'json',

        type:'delete',

        url: url + '/' + id,

    }).done(function(data){



        c_obj.remove();

        toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});

        getPageData();



    });

});




/* Edit Post */

$("body").on("click",".edit-item",function(){

    var id = $(this).parent("td").data('id');

    var title = $(this).parent("td").prev("td").prev("td").text();

    var details = $(this).parent("td").prev("td").text();



    $("#edit-item").find("input[name='title']").val(title);

    $("#edit-item").find("textarea[name='details']").val(details);

    $("#edit-item").find("form").attr("action",url + '/' + id);

});




/* Updated new Post */

$(".crud-submit-edit").click(function(e){

    e.preventDefault();

    var form_action = $("#edit-item").find("form").attr("action");

    var title = $("#edit-item").find("input[name='title']").val();

    var details = $("#edit-item").find("textarea[name='details']").val();



    $.ajax({

        dataType: 'json',

        type:'PUT',

        url: form_action,

        data:{title:title, details:details}

    }).done(function(data){

        getPageData();

        $(".modal").modal('hide');

        toastr.success('Los datos del local fueron modificados.', 'Success Alert', {timeOut: 5000});

    });

});