<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function parroquias(){
        return $this->hasMany('App\Parroquia');
    }

    public function estado(){
        return $this->belongsTo('App\Estado');
    }
    public function zonas(){
        return $this->hasMany('App\Parroquia');
    }
}
