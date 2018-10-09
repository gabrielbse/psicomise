<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToxidadeAgudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toxidade_agudas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->integer('bloqueio_nas_narinas');
            $table->integer('dispineia');
            $table->integer('apneia');
            $table->integer('cianose');
            $table->integer('atividade_motora');
            $table->integer('sonolencia');
            $table->integer('reflexo_e_resposta_a_dor');
            $table->integer('catalepsia');
            $table->integer('ataxia');
            $table->integer('prostacao');
            $table->integer('tremores');
            $table->integer('fechamento_palpebra');
            $table->integer('retrair_pata');
            $table->integer('constricao_pupila_com_luz');
            $table->integer('resposta_estimulo');
            $table->integer('lacrimejamento');
            $table->integer('constricao_pupila_sem_luz');
            $table->integer('retracao_olho');
            $table->integer('queda_palpebra');
            $table->integer('cornea_opaca');
            $table->integer('bradicardia');
            $table->integer('taquicardia');
            $table->integer('arritmia');
            $table->integer('vasocontricao_ou_dialatacao');
            $table->integer('hipotonia');
            $table->integer('hipertonia');
            $table->integer('fezes');
            $table->integer('diarreia');
            $table->integer('vomito');
            $table->integer('miccao_involuntaria');
            $table->integer('urina_vermelha');
            $table->integer('edema');
            $table->integer('avermelhamento_pele');
            $table->integer('convulsoes');
            $table->integer('salivacao');
            $table->integer('forca_para_agarrar');
            $table->integer('miccao');
            $table->integer('piloerecao');
            $table->integer('respiracao');
            $table->integer('analgesia');
            $table->string('observacao')->nullable();
            $table->integer('fk_avaliacao_toxidade_aguda')->unsigned();
            $table->foreign('fk_avaliacao_toxidade_aguda')->references('id')->on('avaliacao_toxidade_agudas')
                ->onUpdate('restrict')
                ->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('toxidade_agudas');
    }
}

