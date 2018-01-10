<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadComercianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_comerciante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned()->nullable();
            $table->foreign('actividad_id')->references('id')->on('actividades')->onDelete('cascade');
            $table->integer('comerciante_id')->unsigned()->nullable();
            $table->foreign('comerciante_id')->references('id')->on('comerciantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_comerciante');
    }
}
