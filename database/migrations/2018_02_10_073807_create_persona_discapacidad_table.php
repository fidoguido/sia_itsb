<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaDiscapacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_discapacidad', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('porcentaje')->default(0);
            $table->char('nroCarnet',10)->required()->comment('CARNET DEL CONADIS O MSP');
            $table->enum('estado',['ACTIVO', 'INACTIVO'])->default('ACTIVO');
    
            //marcas de tiempo
            $table->timestamps();

            //realciones
            //persona
            $table->bigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('personas');
            //discapacidades
            $table->smallInteger('discapacidad_id')->unsigned();
            $table->foreign('discapacidad_id')->references('id')->on('discapacidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_discapacidad');
    }
}
