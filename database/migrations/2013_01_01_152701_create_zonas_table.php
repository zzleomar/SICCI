<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('municipio_id')->unsigned()->nullable();
            $table->integer('parroquia_id')->unsigned()->nullable();
            $table->enum('tipo',['Administrador','Comerciante']);
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('parroquia_id')->references('id')->on('parroquias')->onDelete('cascade');
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
        Schema::dropIfExists('zonas');
    }
}
