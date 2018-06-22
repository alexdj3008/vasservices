<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalQuirurgicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_quirurgicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('planificacion_cirugia_id');
            $table->String('nombre');
            $table->String('cargo');
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
        Schema::dropIfExists('personal_quirurgicos');
    }
}
