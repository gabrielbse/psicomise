<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoTriagemFarmacologica extends Model
{
    public $fillable = ['fk_animal', 'tempo_minuto_avaliacao', 'data_avaliacao', 'fk_experimento', 'peso_animal_dia'];

    public function animal() {
        return $this->belongsTo(Animal::class, 'fk_animal');
    }

    public function experimento() {
        return $this->belongsTo(Experimento::class, 'fk_experimento');
    }

}