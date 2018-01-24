<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\Municipio;
use App\Parroquia;

class DireccionController extends Controller
{
    public function ajaxparroquia($muni){
    	$municipio=Municipio::find($muni);
    	return view('partials.ajax-parroquia')->with('parroquias',$municipio->parroquias);
    }
    public function ajaxzona($parroq){
    	$parroquia=Parroquia::find($parroq);
    	return view('partials.ajax-zona')->with('zonas',$parroquia->zonas);
    }
}
