<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table ="administradores";
    
    protected $fillable = [
        'user_id'
    ];

    public function user(){
        return $this->hasOne('App\User');
    }
}
