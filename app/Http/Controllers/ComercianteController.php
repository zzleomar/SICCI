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
  
  public function comerciantes(){
  	$comerciantes=Comerciante::all();
	$datosP=array();
  	foreach ($comerciantes as $comerciante) {
		$locales=sizeof($comerciante->locales());
		$productos=0;
		$vendido=0;
		$locales=sizeof($comerciante->locales);
		foreach ($comerciante->locales as $local){
			$productos=$productos+sizeof($local->cargas);
			foreach ($local->cargas as $carga){
				if(!(is_null($carga->ventas))){
					$costo=$carga->precio_venta;
					foreach ($carga->ventas as $venta) {
						$vendido=$vendido+($venta->cantidad*$costo);
					}
				}
				
			}
		}
		$dP=array("locales" => $locales,"cantidad" => $productos, "vendido" => $vendido);
		array_push($datosP, $dP);
  	}
  	return view('administrador.comerciante')
  			->with('comerciantes', $comerciantes)
  			->with('datosP', $datosP);
  	/*
  	Cedula
  	nombre completo
  	cantidad de locales
  	cantidad de producto registrados
  	total de ventas

  	 */
  }

  public function Ajaxcomerciantes($idUser){
  	$user=User::find($idUser);
  	$locales=$user->comerciante->locales;
  	$productos=array();
	foreach ($locales as $local){
		foreach ($local->cargas as $carga){
			if(!(is_null($carga->ventas))){
				$acumulador=0;
				foreach ($carga->ventas as $venta) {
					$acumulador=$acumulador+$venta->cantidad;
				}
				$pAux= array("producto" => $carga->producto, "disponivilidad" => ($carga->cantidad-$acumulador), "vendidos" => $acumulador, "adqui" => $carga->precio_adquirido, "venta" => $carga->precio_venta);
				array_push($productos, $pAux);

			}
			else{
				$pAux= array("producto" => $carga->producto, "disponivilidad" => $carga->cantidad, "vendidos" => 0, "adqui" => $carga->precio_adquirido, "venta" => $carga->precio_venta);
				array_push($productos, $pAux);
			}
		}
  	}
  	return view('administrador.ajax.comerciante-ajax')
  			->with("productos", $productos)
  			->with("user",$user)
  			->with("locales",$locales);
	}
}
