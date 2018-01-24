<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\User;
use App\Local;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class localController extends Controller
{
    public function index2(){
		$estado=Estado::find(1);
    	return view('administrador.locales.index')->with('estado', $estado)
  			;
    }
    public function index()

    {

        $locales = Local::all();
        $json=array();
        foreach ($locales as $local) {
        	$direccion=$local->direccion();
        	$user=$local->comerciante->DatosUser($local->comerciante->user_id);
        	$cedula=$user->cedula.' - '.$user->nombres." ".$user->apellidos;
        	$id=$local->id;
        	$reg=array('cedula' => $cedula, 'direccion' => $direccion, 'id' => $id);
        	array_push($json, $reg);
        }
        $page = Input::get('page');
        $json = new LengthAwarePaginator($json, $total = sizeof($json), 5, $page);
    	$json->setPath('/administrador/locales');
        return response()->json($json);

    }

     public function store(Request $request)

    {
    	$user=User::BuscarCI($request->cedula)->first();
    	if(!(is_null($user))){
    		$new= new Local();
    		$new->zona_id=$request->zona;
    		$new->comerciante_id=$user->comerciante->id;
    		$new->save();
    		$direccion=$new->direccion();
        	$cedula=$user->cedula;
        	$id=$new->id;
        	$json=array('cedula' => $cedula, 'direccion' => $direccion, 'id' => $id);
    	}
    	else{
        	$json=array('cedula' => '0', 'direccion' => '0', 'id' => '0');
    	}
        return response()->json($json);

    }



    public function update(Request $request, $id)

    {

        $post = Post::find($id)->update($request->all());

        return response()->json($post);

    }



    public function destroy($id)

    {

        Post::find($id)->delete();

        return response()->json(['done']);

    }

    
}
