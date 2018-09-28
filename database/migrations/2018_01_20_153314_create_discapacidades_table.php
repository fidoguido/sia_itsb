<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscapacidadesTable extends Migration
{
    /**
     * Run the migrations.
     * required()->default("00")->comment
     * @return void
     */
    public function up()
    {
        Schema::create('discapacidades', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('discapacidad',15)->required()->unique()->comment('SEGUN DIRECCION NACIONAL DE DISCAPACIDADES');
            $table->enum('estado',['ACTIVO', 'INACTIVO'])->default('ACTIVO');
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
        Schema::dropIfExists('discapacidades');
    }
}
