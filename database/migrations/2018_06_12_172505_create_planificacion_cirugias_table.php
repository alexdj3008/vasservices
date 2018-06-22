<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanificacionCirugiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planificacion_cirugias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipo_cirugia_id');
            $table->unsignedInteger('reservacion_id')->nullable();
            $table->unsignedInteger('cirujano_id');
            $table->unsignedInteger('paciente_id');
            $table->String('responsable');
            $table->String('parentesco');
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
        Schema::dropIfExists('planificacion_cirugias');
    }
}
