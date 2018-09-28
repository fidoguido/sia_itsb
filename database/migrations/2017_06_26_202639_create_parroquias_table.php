<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->increments('idParroquia');
            $table->string('codParroquia',6)->unique()->required()->default("00000")->comment('Codigo según INEC-2011');
            $table->string('parroquia',50)->required()->comment('Nombre de la Parroquia');
            $table->enum('estado', ['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            $table->enum('tipo', ['U','R'])->default('U');
            $table->softDeletes();
            $table->timestamps();
            //relaciones
            $table->integer('canton_id')->unsigned();
            $table->foreign('canton_id')->references('idCanton')->on('cantones')
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
        Schema::dropIfExists('parroquias');
    }
}
