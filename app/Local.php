<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table ="locales";
    
    protected $fillable = [
        'nombres','direccion','comerciante_id'
    ];
    public function comerciante(){
        return $this->belongsTo('App\Comerciante');
    }
    public function cargas(){
        return $this->hasMany('App\Carga');
    }
}
