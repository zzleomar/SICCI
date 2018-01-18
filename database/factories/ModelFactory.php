<?php

use Faker\Generator as Faker;
use App\User;
use App\Administrador;
use App\Comerciante;
use App\Proveedor;

$factory->define(User::class, function (Faker $faker) {
	$x=$faker->randomDigit;
    if($x!=0){
    	$x=(($x/10)*14);
    	$x=intval($x);
    	if($x==0)
    		$x=1;
    }
    else{
    	$x=1;
    }
return [
        'nombres' => $faker->firstName,
		'apellidos' => $faker->lastName,
		'email' => $x.$faker->email,
		'tlf_movil' => $faker->phoneNumber,
		'tlf_casa' => $faker->phoneNumber,
		'estado_id' => '1',
		'municipio_id' => $x,
		'parroquia_id' => '1'
    ];
});

$factory->define(Comerciante::class, function (Faker $faker) {
	return [
		'cod_carnet' =>intval($faker->randomDigit)
    ];
});

$factory->define(Proveedor::class, function (Faker $faker) {
	return [
		'nombre' =>$faker->firstName." ".$faker->lastName
    ];
});

$factory->define(Administrador::class, function (Faker $faker) {
return [
    ];
});