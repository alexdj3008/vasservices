<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirujanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cirujanos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('telefono')->nullable();
            $table->integer('especialidad_id');
            $table->Text('descripcion')->nullable();
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
        Schema::dropIfExists('cirujanos');
    }
}
