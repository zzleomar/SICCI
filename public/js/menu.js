$(document).ready(function(){
  var altura = $(document).height();
  altura=altura-200;
  altura=altura+"px";
  $("#contenedorPersonal").css("min-height",altura);

  //nav
  //
  //
  var pathname = window.location.pathname;
  switch (pathname) {
    case '/administrador':
      $('#indexAdmin').addClass('active');
      break;
    case '/administrador/comerciantes':
      $('#ComercianteAdmin').addClass('active');
      break;
    case '/administrador/locales':
      $('#LocalAdmin').addClass('active');
      break;
    case '/sucursal':
      $('#ProductosAdmin').addClass('active');
      break;
    case '/sucursal/reportes/ingresos':
      $('#EstaciomientoAdmin').addClass('active');
      break;
    case '/gerente-sucursales':
      $('#ZonasAdmin').addClass('active');
      break;
    case '/gerente-sucursales/administracion-rutas':
      $('#ActividadAdmin').addClass('active');
      break;
    case '/gerente-sucursales/administracion-aeronaves':
      $('#adminaeronaves').addClass('active');
      break;
    case '/gerencia/RRHH':
      $('#adminPersonal').addClass('active');
      break;
    case '/RRHH/asistencia':
      $('#adminAsistencia').addClass('active');
      break;
    case '/gerente-RRHH/nomina':
      $('#OpcNomina').addClass('active');
      break;
    case '/gerente-RRHH/tabulador-salarial':
      $('#OpcTabuladorSalarial').addClass('active');
      break;
    case '/gerente-RRHH':
      $('#gerentRRHHIni').addClass('active');
      break;

    default:
      //alert(pathname);
      break;
  }
});