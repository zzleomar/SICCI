<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comerciante extends Model
{
    protected $table ="comerciantes";
    
    protected $fillable = [
        'user_id','cod_carnet'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }
    public function locales(){
        return $this->hasMany('App\Local');
    }
    public function actividades(){
        return $this->belongsToMany('App\Actividad');
    }
}
