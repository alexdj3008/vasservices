<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirujanoClinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirujano_clinica', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cirujano_id');
            $table->unsignedInteger('clinica_id');
            $table->char('estatus',1)->default('A');
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
        Schema::dropIfExists('cirujano_clinica');
    }
}
