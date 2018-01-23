$.ajaxSetup({

    headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

});
$(document).ready(function(){
	var pathname = window.location.pathname;
  switch (pathname) {
    case '/administrador/comerciantes':
      $('#adminComerciantes').addClass('active');
      break;
     case '/administrador/productos':
      $('#adminProductos').addClass('active');
      break;
     }
});
