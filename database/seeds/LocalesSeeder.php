<?php

use Illuminate\Database\Seeder;

class LocalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locales')->insert([
        	'zona_id' => '1',
        	'comerciante_id' => '1'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '2',
        	'comerciante_id' => '5'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '2',
        	'comerciante_id' => '1'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '2',
        	'comerciante_id' => '4'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '1',
        	'comerciante_id' => '1'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '1',
        	'comerciante_id' => '2'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '1',
        	'comerciante_id' => '3'
	    ]);
    	DB::table('locales')->insert([
        	'zona_id' => '1',
        	'comerciante_id' => '6'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '2',
        	'comerciante_id' => '7'
	    ]);
	    DB::table('locales')->insert([
        	'zona_id' => '1',
        	'comerciante_id' => '8'
	    ]);
    }
}
