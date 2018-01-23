<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres',255);
            $table->string('apellidos',255);
            $table->string('email',40)->unique();        
            $table->string('cedula',40)->unique();
            $table->string('tlf_movil',255)->nullable();
            $table->string('tlf_casa',255)->nullable();
            $table->string('ubicacion',255)->nullable();
            $table->string('password');
            $table->integer('estado_id')->unsigned()->nullable();
            $table->integer('municipio_id')->unsigned()->nullable();
            $table->integer('parroquia_id')->unsigned()->nullable();
            $table->enum('tipo',['Administrador','Comerciante','Coordinador']);
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('parroquia_id')->references('id')->on('parroquias')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
