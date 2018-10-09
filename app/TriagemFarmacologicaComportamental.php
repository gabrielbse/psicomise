<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TriagemFarmacologicaComportamental extends Model
{
    public $fillable = ['agressividade', 'ambulacao_aumentada', 'andar_em_circulo', 'auto_limpeza', 'bocejo', 'contorcoes_abdominais', 'convulsoes', 'escalar', 'estereotipia', 'irritabilidade', 'levantar', 'movimentacao_intensa_das_vibrissas', 'pedalar', 'sacudir_a_cabeca', 'saltos', 'tremores', 'tremores', 'vocalizacao', 'abducao_das_patas_do_trem_posterior', 'ambulacao_diminuida', 'analgesia', 'anestesia', 'ataxia', 'catatonia', 'cauda_de_straub', 'hipnose', 'perda_do_reflexo_auricular', 'perda_do_reflexo_corneal', 'ptose_palpebral', 'reflexo_de_endireitamento', 'resposta_ao_toque_diminuida', 'sedacao', 'cianose', 'constipacao', 'defecacao', 'diarreia', 'forca_para_agarrar', 'lacrimejamento', 'miccao', 'piloerecao', 'respiracao', 'salivacao', 'tonus_muscular', 'mortes', 'observacao', 'fk_avaliacao_triagem_farmacologica'];

      public function avaliacaoTriagemFarmacologica() {
        return $this->belongsTo(AvaliacaoTriagemFarmacologica::class, 'fk_avaliacao_triagem_farmacologica');
    }

}