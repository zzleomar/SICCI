<?php

use Illuminate\Database\Seeder;

class CargasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Familia de productos
        //
        DB::table('familias')->insert([
        	'nombre' => 'Agricola',
	    ]);
	    DB::table('familias')->insert([
        	'nombre' => 'Alimentos no Perecederos',
	    ]);
	    DB::table('familias')->insert([
        	'nombre' => 'Inmubiliarios',
	    ]);
	    DB::table('familias')->insert([
        	'nombre' => 'Contrucción',
	    ]);
	    DB::table('familias')->insert([
        	'nombre' => 'Textiles',
	    ]);
	    DB::table('familias')->insert([
        	'nombre' => 'Utensilios Comunes'
	    ]);
	    DB::table('familias')->insert([
        	'nombre' => 'Producto de higiene'
	    ]);

	 	DB::table('productos')->insert([
        	'nombre' => 'Arroz',
        	'familia_id' => '2'
	    ]);
	    DB::table('productos')->insert([
        	'nombre' => 'Zapatos',
        	'familia_id' => '5'
	    ]);
	    DB::table('productos')->insert([
        	'nombre' => 'Sardinas en lata',
        	'familia_id' => '2'
	    ]);
	    DB::table('productos')->insert([
        	'familia_id' => '2',
        	'nombre' => 'Harina pan'
	    ]);
	    DB::table('productos')->insert([
        	'familia_id' => '2',
        	'nombre' => 'Aceite'
	    ]);
	    DB::table('productos')->insert([
        	'familia_id' => '1',
        	'nombre' => 'Perrarina'
	    ]);
	    DB::table('productos')->insert([
        	'familia_id' => '7',
        	'nombre' => 'Pañales'
	    ]);
	    DB::table('productos')->insert([
        	'familia_id' => '6',
        	'nombre' => 'Mantequilla'
	    ]);
	    DB::table('productos')->insert([
        	'familia_id' => '5',
        	'nombre' => 'Pantalones'
	    ]);

        factory(App\Proveedor::class,15)->create();

        for($i=0;$i<100;$i++){ //id local
        	$x=random_int(1, 10);
		    $y=random_int(1, 9); //id producto
		    $q=random_int(1, 3); //id costo
		    $qq=random_int(1, 15);
	    	DB::table('cargas')->insert([
	    		'cantidad' => '68',
	    		'precio_adquirido' => (12000*$q),
	    		'precio_venta' => (13200*$q),
	    		'proveedor_id' => $qq,
	    		'local_id' => $x,
	    		'producto_id' =>  $y
	    	
	    	]);
        }
	       
    }
}
