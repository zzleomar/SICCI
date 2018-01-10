<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table ="ventas";
    
    protected $fillable = [
        'cantidad','carga_id'
    ];

    public function carga(){
        return $this->belongsTo('App\User');
    }
}
