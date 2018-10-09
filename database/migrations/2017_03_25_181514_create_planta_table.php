<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas' , function (Blueprint $table){
            $table->increments('id');
            $table->string('nome_planta');
            $table->string('local_retirada');
            $table->string('link_com_site');
            $table->integer('fk_especie_planta')->unsigned();
            $table->foreign('fk_especie_planta')->references('id')->on('especie_plantas')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('fk_genero_planta')->unsigned();
            $table->foreign('fk_genero_planta')->references('id')->on('genero_plantas')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('fk_familia_planta')->unsigned();
            $table->foreign('fk_familia_planta')->references('id')->on('familia_plantas')
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
        Schema::drop("plantas");
    }
}
