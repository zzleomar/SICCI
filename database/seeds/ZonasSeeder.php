<?php

use Illuminate\Database\Seeder;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
	    DB::table('zonas')->insert([
	            'nombre' => 'Mercado Municipal',
	            'parroquia_id' => '1',
	            'municipio_id' => '1',
	            'estado_id' => '1',
	        ]);
	    DB::table('zonas')->insert([
	            'nombre' => 'Centro mariño-Bermudez',
	            'parroquia_id' => '6',
	            'municipio_id' => '1',
	            'estado_id' => '1'
	        ]);
    }
}
