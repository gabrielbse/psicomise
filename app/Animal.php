<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public $fillable = ['identificacao_do_animal', 'idade_animal', 'sexo_animal', 'fk_grupo_experimento'];

      public function grupo_experimento() {
        return $this->belongsTo(Grupo_experimento::class, 'fk_grupo_experimento');
    }

}