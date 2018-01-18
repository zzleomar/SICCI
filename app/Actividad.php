<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table ="actividades";
    
    protected $fillable = [
        'comerciante_id',"descripcion"
    ];
    public function comerciantes(){
        return $this->belongsToMany('App\Comerciante');
    }
}
