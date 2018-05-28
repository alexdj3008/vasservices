<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuirofanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quirofanos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('clinica_id');
            $table->integer('numero');
            $table->String('descripcion');
            $table->char('estatus');
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
        Schema::dropIfExists('quirofanos');
    }
}
