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

});


Route::group(['prefix' => 'comerciante','middleware' => ['auth', 'ComercianteROle']],function(){
	Route::get('/', function () {
	    return view('comerciante.index');
	});
});

