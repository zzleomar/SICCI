<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
   protected $table ="zonas";
    
    protected $fillable = [
        'nombre','estado_id','municipio_id','parroquia_id'
    ];

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
