<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
    	
        $this->call(EstadosSeeder::class);
        $this->call(municipioSeeder::class);
        $this->call(ParroquiasSeeder::class);
        $this->call(ZonasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocalesSeeder::class);
        $this->call(CargasSeeder::class);   
        $this->call(VentasSeeder::class);    

        Model::reguard();
    }
}
