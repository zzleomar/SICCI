<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table ="proveedores";
    
    protected $fillable = [
        'nombre'
    ];

    public function cargas(){
        return $this->hasMany('App\Carga');
    }
}
