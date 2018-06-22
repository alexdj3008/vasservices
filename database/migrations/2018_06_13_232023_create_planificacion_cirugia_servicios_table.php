<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionCirugiaServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_cirugia_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('planificacion_cirugia_id');
            $table->unsignedInteger('servicios_id');
            $table->char('estatus',1);
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
        Schema::dropIfExists('planificacion_cirugia_servicios');
    }
}
