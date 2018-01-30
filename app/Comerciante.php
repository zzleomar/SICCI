<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comerciante extends Model
{
    protected $table ="comerciantes";
    
    protected $fillable = [
        'user_id','cod_carnet'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function locales(){
        return $this->hasMany('App\Local');
    }
    public function actividades(){
        return $this->belongsToMany('App\Actividad');
    }
    public function DatosUser($id){
        return User::find($id);
    }
}
