<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipoIdentificacion',['CED','PAS','CDR'])->default('CED');
            $table->string('nroIdentificacion',13);
            $table->string('apellidoPaterno',20)->required();
            $table->string('apellidoMaterno',20);
            $table->string('primerNombre',20)->required();
            $table->string('segundoNombre',20);
            $table->string('email',120);
            $table->date('fechaNacimiento');
            $table->enum('genero',['MASCULINO', 'FEMENINO'])->default('MASCULINO');
            $table->enum('estadoCivil',['SOLTERO(A)', 'CASADO(A)', 'DIVORCIADO(A)', 'UNION LIBRE', 'VIUDO(A)'])->default('SOLTERO(A)');
            $table->enum('grupoSanguineo',['AB+', 'AB-', 'A+', 'A-', 'B+', 'B-', 'O+', 'O-'])->default('O+');
            $table->enum('estado',['ACTIVO', 'INACTIVO'])->default('ACTIVO');
            
            //marca de tiempo
            $table->timestamps();
            
            //realciones
            //pais de nacimiento
            $table->integer('pais_id')->unsigned()->default(52);
            $table->foreign('pais_id')->references('id')->on('paises')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //nacionalidad
            $table->integer('nacionalidad_id')->unsigned()->default(19);
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //etnia
            $table->smallInteger('etnia_id')->unsigned()->default(4);;
            $table->foreign('etnia_id')->references('id')->on('etnias')
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
        Schema::dropIfExists('personas');
    }
}
