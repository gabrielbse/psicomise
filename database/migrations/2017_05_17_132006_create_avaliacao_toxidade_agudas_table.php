<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoToxidadeAgudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_toxidade_agudas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('fk_animal')->unsigned();
            $table->foreign('fk_animal')->references('id')->on('animals')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('tempo_minuto_avaliacao');
            $table->string('data_avaliacao');
            $table->integer('fk_experimento')->unsigned();
            $table->foreign('fk_experimento')->references('id')->on('experimentos')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->integer('peso_animal_no_dia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('avaliacao_toxidade_agudas');
    }
}
