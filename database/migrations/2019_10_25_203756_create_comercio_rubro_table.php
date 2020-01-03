<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComercioRubroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercio_rubro', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('comercio_id')->unsigned();
            $table->bigInteger('rubro_id')->unsigned();

            $table->timestamps();

            $table->foreign('comercio_id')->references('id')->on('comercios')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
            
            $table->foreign('rubro_id')->references('id')->on('rubros')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comercio_rubro');
    }
}
