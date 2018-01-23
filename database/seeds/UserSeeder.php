<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,1)->create([
        	'tipo' => 'Administrador',
        	'cedula' => '23806671',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Administrador::class)->make([
                        'user_id' => $u->id,
                        ])
                );
             })
        ;
        factory(App\User::class,1)->create([
            'tipo' => 'Coordinador',
            'cedula' => '23806672',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Administrador::class)->make([
                        'user_id' => $u->id,
                        ])
                );
             })
        ;

        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '1234567',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;

        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '4321',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;

        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '2231',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;

        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '1133',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;

        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '1233',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;
        
        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '11233',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;

        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '112733',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;


        factory(App\User::class,1)->create([
        	'tipo' => 'Comerciante',
        	'cedula' => '113233',
            'password' => bcrypt('1234567')
        ])
            ->each(function ($u) {
               $u->Administrador()->save(factory(App\Comerciante::class)->make([
                        'user_id' => $u->id
                        ])
                );
             })
        ;
    }
}
