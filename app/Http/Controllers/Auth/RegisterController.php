<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Administrador;
use App\Comerciante;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cedula' => 'required|string|max:40|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tipo' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
            $nuevoAdministrador= new Administrador();
            $nuevoComerciante= new Comerciante();
        
        if($data['tipo']=='Administrador'){
            return User::create([
                'nombres' => $data['nombres'],
                'email' => $data['email'],
                'apellidos' => $data['apellidos'],
                'cedula' => $data['cedula'],
                'tipo' => $data['tipo'],
                'password' => bcrypt($data['password']),
            ])->each(function ($a) {
               $a->administrador()->save($nuevoAdministrador);
           });
        }
        else{
            return User::create([
                'nombres' => $data['nombres'],
                'email' => $data['email'],
                'apellidos' => $data['apellidos'],
                'cedula' => $data['cedula'],
                'tipo' => $data['tipo'],
                'password' => bcrypt($data['password']),
            ])->each(function ($a) {
               $a->comerciante()->save($nuevoComerciante);
           });
        }
    }
}
