<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
	protected $table ="cargas";
    
    protected $fillable = [
        'cantidad', 'precio_adquirido', 'precio_venta','proveedor_id','local_id','producto_id'
    ];

    public function proveedor(){
        return $this->belongsTo('App\Proveedor');
    }
    public function local(){
        return $this->belongsTo('App\Local');
    }
    public function producto(){
        return $this->belongsTo('App\Producto');
    }
    public function ventas(){
        return $this->hasMany('App\Venta');
    }
    public function scoperecientes($query, $inicio, $actual){
        return $query->whereDate('created_at','>=', $inicio->toDateTimeString())->whereDate('created_at','<=', $actual->toDateTimeString());
    }

    




}
