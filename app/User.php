<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ="users";
    
    protected $fillable = [
        'nombres', 'apellidos', 'email','cedula','tlf_movil','tlf_casa','estado_id','municipio_id','parroquia_id','password','tipo'
    ];

    public function comerciante(){
        return $this->hasOne('App\Comerciante');
    }
    public function administrador(){
        return $this->hasOne('App\Administrador');
    }
    public function estado(){
        return $this->belongsTo('App\Estado');
    }
    public function municipio(){
        return $this->belongsTo('App\Municipio');
    }
    public function parroquia(){
        return $this->belongsTo('App\Parroquia');
    }

}
