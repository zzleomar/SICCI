<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table ="familias";
    
    protected $fillable = [
        'nombre'
    ];

    public function productos(){
        return $this->hasMany('App\Producto');
    }
}
