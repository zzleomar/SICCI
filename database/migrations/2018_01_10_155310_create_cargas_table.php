<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad')->unsigned();
            $table->float('precio_adquirido',8,3);
            $table->float('precio_venta',8,3); 
            $table->timestamps();
            $table->integer('proveedor_id')->unsigned()->nullable();
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
            $table->integer('local_id')->unsigned()->nullable();
            $table->foreign('local_id')->references('id')->on('locales')->onDelete('cascade');
            $table->integer('producto_id')->unsigned()->nullable();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargas');
    }
}
