<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Administrador;
use App\Comerciante;

class UsuarioController extends Controller
{
    public function NuevoUsuario(Request $datos){
        //dd($datos);
    	$nuevo=new User();
    	$nuevo->nombres=$datos->nombres;
		$nuevo->apellidos=$datos->apellidos;
		$nuevo->email=$datos->email;
		$nuevo->cedula=$datos->cedula;
		$nuevo->password=bcrypt($datos->password);
		$nuevo->tipo=$datos->tipo;
		$nuevo->save();
        
        if($nuevo->tipo=='Administrador'){
        	$administrador=new Administrador();
        	$nuevo->administrador()->save($administrador);
        }
        else{
        	$comerciante=new Comerciante();
        	$nuevo->comerciante()->save($comerciante);
        }
      return redirect('/inicio');
    }
}
