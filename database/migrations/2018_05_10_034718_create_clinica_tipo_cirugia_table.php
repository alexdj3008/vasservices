<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicaTipoCirugiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica_tipo_cirugia', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tipo_cirugia_id');
            $table->unsignedInteger('clinica_id');
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
        Schema::dropIfExists('clinica_tipo_cirugia');
    }
}
