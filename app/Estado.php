<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function municipio(){
        return $this->hasMany('App\Municipio');
    }
    public function zonas(){
        return $this->hasMany('App\Parroquia');
    }
}
