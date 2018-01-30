<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Estado;
use App\Zona;
use App\Carga;
use App\Familia;
use App\Municipio;
use App\Parroquia;
use App\Comerciante;
use App\Local;
use App\Producto;
use App\Http\Requests\UserRequest;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;


class ComercianteController extends Controller
{
  public function nuevo(Request $datos){
  	$nuevo= new User();
  	$nuevo->nombres=$datos->nombre;
	$nuevo->apellidos=$datos->apellido;
	$nuevo->email=$datos->email;
	$nuevo->cedula=$datos->cedula;
	$nuevo->estado_id=$datos->estadoC;
	$nuevo->municipio_id=$datos->municipioC;
	$nuevo->parroquia_id=$datos->parroquia1;
	$nuevo->ubicacion=$datos->ubicacion;
	$nuevo->password=bcrypt("1234567");
	$nuevo->tlf_movil="0414 123 2354";
	$nuevo->tlf_casa="0293 123 2354";
	$nuevo->tipo="Comerciante";
	$nuevo->save();

	$nuevocomerciantes= new Comerciante();
	$nuevocomerciantes->cod_carnet=$datos->carnet;
	$nuevo->comerciante()->save($nuevocomerciantes);

	$nuevolocal= new Local();
	$zona=Zona::find($datos->zona);
	$nuevolocal->zona()->associate($zona);
	$nuevolocal->comerciante()->associate($nuevo->comerciante);
	$nuevolocal->save();

	//falta el proveedor del producto
	$carga=new Carga();
	$carga->cantidad=$datos->Datosunidades;
	$carga->precio_adquirido=$datos->precio_adqui;
	$carga->precio_venta=$datos->precio_venta;
	$carga->proveedor_id=1;
	$carga->local()->associate($nuevolocal);
	$producto=Producto::find($datos->producto);
	$carga->producto()->associate($producto);
	$carga->save();
	$nombre=$nuevo->nombres." ".$nuevo->apellidos;
	$locales=1;
	$producto=1;
	$ventas=0;
    $json=array('id' => $nuevo->id, 'cedula' => $nuevo->cedula, 'nombres' => $nuevo->nombres, 'apellidos' => $nuevo->apellidos, 'locales' => 1, 'cantidad' => 1, 'vendidos' => 0);
    return response()->json($json);

    return redirect('/administrador/comerciantes');

  }
  
  public function index(){
	$estado=Estado::find(1);
  	$familias=Familia::all();
  	return view('administrador.comerciante')
  			->with('estado',$estado)
  			->with('familias',$familias);
  }

  public function comerciantes(){
  	$comerciantes=Comerciante::all();
  	$familias=Familia::all();
  	$datosP=array();
	/*$estado=Estado::orderBy('nombre')->get();
	$municipios=Municipio::orderBy('nombre')->get();*/
	$estado=Estado::find(1);
  	foreach ($comerciantes as $comerciante) {
		$locales=sizeof($comerciante->locales);
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
		$dP=array("locales" => $locales,"cantidad" => $productos, "vendidos" => $vendido, "id" => $comerciante->id, "cedula" => $comerciante->DatosUser($comerciante->user_id)->cedula, "nombres" => $comerciante->DatosUser($comerciante->user_id)->nombres, "apellidos" => $comerciante->DatosUser($comerciante->user_id)->apellidos, "id" => $comerciante->user_id);
		array_push($datosP, $dP);
  	}
  	$page = Input::get('page');
    $datosP = new LengthAwarePaginator($datosP, $total = sizeof($datosP), 10, $page);
	$datosP->setPath('/administrador/comerciantes');
    return response()->json($datosP);

  	return view('administrador.comerciante')
  			->with('comerciantes', $comerciantes)
  			->with('datosP', $datosP)
  			->with('estado',$estado)
  			->with('familias',$familias);
 
  }

  public function Ajaxcomerciantes($idUser){
  /*	$user=User::find($idUser);
  	$locales=$user->comerciante->locales;
  	$productosT=array();
	foreach ($locales as $local){
		$productos=Carga::Productos($local->id);
		array_push($productosT, $productos);
  	}

  	//paginar el array
  /*	$page = Input::get('page');
    $productos = new LengthAwarePaginator($productos, $total = sizeof($productos), 10, $page);
    $productos->setPath('comerciantes/ajax/'.$idUser); 
  	return view('administrador.ajax.comerciante-ajax')
  			->with("productos", $productosT)
  			->with("user",$user)
  			->with("locales",$locales);*/
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
  	//paginar el array
  /*	$page = Input::get('page');
    $productos = new LengthAwarePaginator($productos, $total = sizeof($productos), 10, $page);
    $productos->setPath('comerciantes/ajax/'.$idUser); }*/
  	return view('administrador.ajax.comerciante-ajax')
  			->with("productos", $productos)
  			->with("user",$user)
  			->with("locales",$locales);
	}
}
