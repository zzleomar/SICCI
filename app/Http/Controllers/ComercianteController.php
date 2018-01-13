<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comerciante;
use App\Http\Requests\UserRequest;

class ComercianteController extends Controller
{
  public function nuevo(Request $datos){
  	$nuevo= new User();
  	$nuevo->nombres=$datos->nombre;
	$nuevo->apellidos=$datos->apellido;
	$nuevo->email=$datos->email;
	$nuevo->cedula=$datos->cedula;
	$nuevo->direccion=$datos->estado.", ".$datos->municipio.", ".$datos->ciudad.", ".$datos->ubicacion;
	$nuevo->password=bcrypt("1234567");
	$nuevo->tlf_movil="0414 123 2354";
	$nuevo->tlf_casa="0293 123 2354";
	$nuevo->tipo="Comerciante";
	$nuevo->save();

	$nuevocomerciantes= new Comerciante();
	$nuevocomerciantes->cod_carnet=$datos->carnet;
	$nuevo->comerciante()->save($nuevocomerciantes);

    return redirect('/administrador/comerciantes');

  }
}
