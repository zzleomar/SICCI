<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth/login');
})->middleware('UserRole');

Auth::routes();

Route::post('/registrar','UsuarioController@NuevoUsuario');

Route::group(['prefix' => 'inicio','middleware' => ['auth', 'UserRole']],function(){
		Route::get('/', function () {
		    return view('index');
		});
});


Route::group(['prefix' => 'administrador','middleware' => ['auth', 'AdministradorRole']],function(){
	Route::get('/', function () {
	    return view('administrador.index');
	});
	Route::get('/','AdministradorController@index');

	Route::get('/productos', function () {
	    return view('administrador.producto');
	});

	Route::resource('/locales','localController');
	Route::resource('posts','PostController');
	Route::get('/local','localController@index2');


	Route::get('/comerciantes','ComercianteController@comerciantes');
	Route::get('/comerciante','ComercianteController@index');
	Route::get('/comerciantes/ajax/{id}','ComercianteController@Ajaxcomerciantes');
	Route::post('/comerciantes/registrar','ComercianteController@nuevo');
	Route::get('/carga/reciente/ajax/{id}','CargasController@AjaxReciente');

});
Route::group(['prefix' => 'direccion','middleware' => ['auth']],function(){
	Route::get('/parroquias/{id1}/{idM}','DireccionController@ajaxparroquia');
	Route::get('/zonas/{id}','DireccionController@ajaxzona');
});

	Route::get('/producto/{id}','ProductoController@ajaxproducto')->middleware('auth');


Route::group(['prefix' => 'comerciante','middleware' => ['auth', 'ComercianteRole']],function(){
	Route::get('/', function () {
	    return view('comerciante.index');
	});
});


