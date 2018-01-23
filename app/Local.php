<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table ="locales";
    
    protected $fillable = [
        'zona_id','comerciante_id'
    ];
    public function comerciante(){
        return $this->belongsTo('App\Comerciante');
    }
    public function cargas(){
        return $this->hasMany('App\Carga');
    }
     public function zona(){
        return $this->belongsTo('App\Zona');
    }
    public function direccion(){
        $zona=Zona::find($this->zona_id);
        return "Edo. ".$zona->estado->nombre.", Municipio ".$zona->municipio->nombre.", ".$zona->parroquia->nombre;
    }
}
