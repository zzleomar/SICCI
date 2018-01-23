<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

   public function scopeProductos($query, $IDlocal){
      
    // $productos=DB::select("SELECT t1.id, t1.precio_adquirido, t1.precio_venta, t1.producto_id,SUM(t1.cantidad) FROM cargas as t1  WHERE t1.id= (select MAX(id) from cargas t2 where t1.local_id=9 and t1.producto_id=t2.producto_id and t1.precio_adquirido=t2.precio_adquirido and t1.precio_venta=t2.precio_venta) and t1.local_id=9  GROUP BY t1.producto_id,t1.precio_adquirido,t1.precio_venta"); //intento de tomar el id mayor de la carga multiple fallido

     $productos=DB::select("SELECT  t1.precio_adquirido, t1.precio_venta, t1.producto_id,SUM(t1.cantidad) as total FROM cargas as t1  WHERE t1.local_id=$IDlocal  GROUP BY t1.producto_id,t1.precio_adquirido,t1.precio_venta");
     
     $datosP=array();
        foreach ($productos as $producto) {
            $cargas=Carga::buscar($producto,$IDlocal);
                $vendidos=0;
            foreach ($cargas as $carga) {
                $ventas=$carga->ventas();
                foreach ($ventas as $venta) {
                    $vendidos=$vendidos-$venta->cantidad;
                }
            }
            $producto->total=$producto->total-$vendidos;
            $arrayA=array("producto" => $producto, "vendidos" => $vendidos);
            array_push($datosP, $arrayA);
        }
        return $datosP;
   }

   public function scopebuscar($query, $producto,$IDlocal){
    return $query->where([['precio_adquirido','=',$producto->precio_adquirido],['precio_venta','=',$producto->precio_venta],['local_id','=',$IDlocal],['producto_id','=',$producto->producto_id]])->get();
   }



}
