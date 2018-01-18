<?php

use Illuminate\Database\Seeder;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0;$i<50;$i++){
        	$x=random_int(1, 100); //id carga
        	$y=random_int(1, 7);
	    	DB::table('ventas')->insert([
	    		'carga_id' => $x,
	    		'cantidad' => $y
	    	]);
        }
    }
}
