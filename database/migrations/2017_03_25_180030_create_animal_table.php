<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals' , function (Blueprint $table){
            $table->increments('id');
            $table->string('identificacao_do_animal');
            $table->float('idade_animal');
            $table->string('sexo_animal', 1);
            $table->integer('fk_grupo_experimento')->unsigned();
            $table->foreign('fk_grupo_experimento')->references('id')->on('grupo_experimentos')
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
        Schema::drop("animals");
    }
}
