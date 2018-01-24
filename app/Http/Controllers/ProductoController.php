<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;

class ProductoController extends Controller
{
    public function ajaxproducto($idFamilia){
    	$familia=Familia::find($idFamilia);
    	return view('partials.ajax-producto')->with("productos",$familia->productos);
    }
}
