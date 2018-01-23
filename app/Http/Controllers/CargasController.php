<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carga;
class CargasController extends Controller
{
    public function AjaxReciente($idC){
    	$carga=Carga::find($idC);
    	return view('administrador.ajax.carga-reciente-ajax')->with('carga',$carga);

    }
}
