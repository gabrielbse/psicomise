<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriagemFarmacologicaComportamentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triagem_farmacologica_comportamentals' , function (Blueprint $table){
            $table->increments('id');
            $table->integer('agressividade');
            $table->integer('ambulacao_aumentada');
            $table->integer('andar_em_circulo');
            $table->integer('auto_limpeza');
            $table->integer('bocejo');
            $table->integer('contorcoes_abdominais');
            $table->integer('convulsoes');
            $table->integer('escalar');
            $table->integer('estereotipia');
            $table->integer('irritabilidade');
            $table->integer('levantar');
            $table->integer('movimentacao_intensa_das_vibrissas');
            $table->integer('pedalar');
            $table->integer('sacudir_a_cabeca');
            $table->integer('saltos');
            $table->integer('tremores');
            $table->integer('vocalizacao');
            $table->integer('abducao_das_patas_do_trem_posterior');
            $table->integer('ambulacao_diminuida');
            $table->integer('analgesia');
            $table->integer('anestesia');
            $table->integer('ataxia');
            $table->integer('catatonia');
            $table->integer('cauda_de_straub');
            $table->integer('hipnose');
            $table->integer('perda_do_reflexo_auricular');
            $table->integer('perda_do_reflexo_corneal');
            $table->integer('ptose_palpebral');
            $table->integer('reflexo_de_endireitamento');
            $table->integer('resposta_ao_toque_diminuida');
            $table->integer('sedacao');
            $table->integer('cianose');
            $table->integer('constipacao');
            $table->integer('defecacao');
            $table->integer('diarreia');
            $table->integer('forca_para_agarrar');
            $table->integer('lacrimejamento');
            $table->integer('miccao');
            $table->integer('piloerecao');
            $table->integer('respiracao');
            $table->integer('salivacao');
            $table->integer('tonus_muscular');
            $table->integer('mortes');
            $table->string('observacao')->nullable();
            $table->integer('fk_avaliacao_triagem_farmacologica')->unsigned();
            $table->foreign('fk_avaliacao_triagem_farmacologica')->references('id')->on('avaliacao_triagem_farmacologicas')
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
        Schema::drop("triagem_farmacologica_comportamentals");
    }
}



