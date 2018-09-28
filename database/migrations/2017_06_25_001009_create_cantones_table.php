<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantones', function (Blueprint $table) {
            $table->increments('idCanton');
            $table->string('codCanton',4)->unique()->required()->default("0000")->comment('Codigo según INEC-2011');
            $table->string('canton',50)->required()->comment('Nombre del Canton');
            $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            $table->softDeletes();
            $table->timestamps();
            //realciones
            $table->smallInteger('provincia_id')->unsigned();
            $table->foreign('provincia_id')->references('idProvincia')->on('provincias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantones');
    }
}
