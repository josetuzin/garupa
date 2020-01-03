<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('plan_id')->unsigned();
            $table->string('razonSocial');
            $table->string('dnicuit');
            $table->integer('categoriaIVA');
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->integer('activo'); 
            $table->timestamps();
            
            $table->foreign('plan_id')->references('id')->on('plans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
