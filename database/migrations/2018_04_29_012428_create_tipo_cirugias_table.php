<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoCirugiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_cirugias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('especialidad_id');
            $table->String('nombre');
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
        Schema::dropIfExists('tipo_cirugias');
    }
}
