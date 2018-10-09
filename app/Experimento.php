<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experimento extends Model
{
    public $fillable = ['nome_experimento','dose', 'fk_via_de_administracao', 'nome_farmaco', 'dose_farmaco', 'fk_parte_da_planta', 'fk_tipo_extrato','peso_referencia', 'fk_planta'];

      public function planta() {
        return $this->belongsTo(Planta::class, 'fk_planta');
    }

     public function via_administracao() {
        return $this->belongsTo(ViaAdministracao::class, 'fk_via_de_administracao');
    }


     public function parte_da_planta() {
        return $this->belongsTo(ParteDaPlanta::class, 'fk_parte_da_planta');
    }

      public function tipo_extrato() {
        return $this->belongsTo(TipoExtrato::class, 'fk_tipo_extrato');
    }

}