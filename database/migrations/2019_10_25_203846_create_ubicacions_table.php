<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('comercio_id')->unsigned();
            $table->string('direccion');
            $table->string('horarioAtencion');
            $table->decimal('latitud', 10, 8);
            $table->decimal('longitud', 11, 8);
            $table->timestamps();

            $table->foreign('comercio_id')->references('id')->on('comercios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ubicacions');
    }
}
