<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_medicas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->String('gruposanguineo')->nullable();
            $table->String('patologias')->nullable();
            $table->String('alergias')->nullable();
            $table->String('traumatismos')->nullable();
            $table->String('tratamientos')->nullable();
            $table->String('medicamentos')->nullable();
            $table->String('diagnostico')->nullable();
            $table->String('indicaciones')->nullable();
            $table->String('presionarterial')->nullable();
            $table->String('respiracion')->nullable();
            $table->String('latidos')->nullable();
            $table->String('observaciones')->nullable();
            $table->String('glicemia')->nullable();
            $table->String('antecedentes')->nullable();
            $table->Float('peso')->nullable();
            $table->Float('talla')->nullable();
            $table->char('estatus')->nullable();
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
        Schema::dropIfExists('historia_medicas');
    }
}
