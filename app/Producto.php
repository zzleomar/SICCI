<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table ="productos";
    
    protected $fillable = [
        'nombre','familia_id'
    ];
    
    public function familia(){
        return $this->belongsTo('App\Familia');
    }
    public function cargas(){
        return $this->hasMany('App\Carga');
    }

    public function scoperecientes($query, $inicio, $actual){
        return $query->whereDate('created_at','>=', $inicio->toDateTimeString())->whereDate('created_at','<=', $actual->toDateTimeString())->get();
    }


}
