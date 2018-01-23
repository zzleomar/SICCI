<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Producto;
use App\Carga;
use App\Http\Requests;

class AdministradorController extends Controller
{
	public function __construct(){
        Carbon::resetToStringFormat();
      Carbon::setLocale('es');
      date_default_timezone_set('America/Caracas');
    }

    public function index(){
    	$actual=Carbon::now();
    	$actual2=Carbon::now();
    	$actual2->subDays(7);
    	$recientes=Carga::recientes($actual2,$actual)->paginate(10);
        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['10', '11', '12', '13', '14', '15', '16','17', '18', '19', '20', '21', '22', '23'])
        ->datasets([
            [
                "label" => "Disponibilidad de Estacionamiento",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 65, 59,5, 59, 10, 6, 4, 2, 00],
            ]
        ])
        ->options([]);
    	//  //para llegar al nombre y apellido
    	return view("administrador.index", compact('chartjs'))->with('recientes',$recientes);
    }
}
