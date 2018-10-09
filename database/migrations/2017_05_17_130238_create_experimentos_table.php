<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experimentos' , function (Blueprint $table){
            $table->increments('id');
            $table->string('nome_experimento');
            $table->float('dose');
            $table->string('nome_farmaco')->nullable();
            $table->float('dose_farmaco')->nullable();
            $table->float('peso_referencia');
            $table->integer('fk_planta')->unsigned();
            $table->foreign('fk_planta')->references('id')->on('plantas')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('fk_via_de_administracao')->unsigned();
            $table->foreign('fk_via_de_administracao')->references('id')->on('via_administracaos')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('fk_parte_da_planta')->unsigned();
            $table->foreign('fk_parte_da_planta')->references('id')->on('parte_da_plantas')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('fk_tipo_extrato')->unsigned();
            $table->foreign('fk_tipo_extrato')->references('id')->on('tipo_extratos')
                ->onUpdate('restrict')
                ->onDelete('cascade');

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
        Schema::drop("experimentos");
    }
}







