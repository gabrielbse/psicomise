<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ToxidadeAguda extends Model
{
    public $fillable = ['bloqueio_nas_narinas', 'dispineia', 'apneia', 'cianose', 'atividade_motora', 'sonolencia', 'reflexo_e_resposta_a_dor', 'catalepsia', 'ataxia', 'prostacao', 'tremores', 'fechamento_palpebra', 'retrair_pata','constricao_pupila_com_luz', 'resposta_estimulo', 'lacrimejamento','constricao_pupila_sem_luz','retracao_olho', 'queda_palpebra', 'cornea_opaca', 'bradicardia', 'taquicardia', 'arritmia', 'vasocontricao_ou_dialatacao', 'hipotonia', 'hipertonia', 'fezes', 'diarreia', 'vomito', 'miccao_involuntaria', 'urina_vermelha', 'edema', 'avermelhamento_pele', 'convulsoes', 'salivacao', 'forca_para_agarrar', 'miccao', 'piloerecao', 'respiracao', 'analgesia', 'observacao', 'fk_avaliacao_toxidade_aguda'];

      public function avaliacaoToxidadeAguda() {
        return $this->belongsTo(AvaliacaoToxidadeAguda::class, 'fk_avaliacao_toxidade_aguda');
    }
}
