<?php

use Illuminate\Database\Seeder;

class municipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            'nombre' => 'Sucre',
            'estado_id' => '1'
        ]);
	       	
	        
        	

        DB::table('municipios')->insert([
            'nombre' => 'Cruz Salmerón Acosta',
            'estado_id' => '1'
        ]);
        	

        DB::table('municipios')->insert([
            'nombre' => 'Bolívar ',
            'estado_id' => '1'
        ]);
        	


        DB::table('municipios')->insert([
            'nombre' => 'Montes',
            'estado_id' => '1'
        ]);
        	


        DB::table('municipios')->insert([
            'nombre' => 'Mejía',
            'estado_id' => '1'
        ]);
        	

        DB::table('municipios')->insert([
            'nombre' => 'Andrés Eloy Blanco',
            'estado_id' => '1'
        ]);
        	

	    DB::table('municipios')->insert([
        	'nombre' => 'Andrés Mata',
            'estado_id' => '1'
        ]);
        	

	    DB::table('municipios')->insert([
        	'nombre' => 'Bermúdez',
            'estado_id' => '1'
        ]);
        	


        DB::table('municipios')->insert([
            'nombre' => 'Arismendi',
            'estado_id' => '1'
        ]);
        	

        DB::table('municipios')->insert([
            'nombre' => 'Libertador',
            'estado_id' => '1'
        ]);


        DB::table('municipios')->insert([
            'nombre' => 'Benítez',
            'estado_id' => '1'
        ]);
        	
        DB::table('municipios')->insert([
            'nombre' => 'Valdez',
            'estado_id' => '1'
        ]);
        	

        DB::table('municipios')->insert([
            'nombre' => 'Cajigal',
            'estado_id' => '1'
        ]);
        	

        DB::table('municipios')->insert([
            'nombre' => 'Mariño',
            'estado_id' => '1'
        ]);
        	

    }
}
