<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    public $fillable = ['nome_planta','local_retirada', 'link_com_site', 'fk_especie_planta', 'fk_genero_planta', 'fk_familia_planta'];

    public function especie_planta() {
        return $this->belongsTo(Especie_planta::class, 'fk_especie_planta');
    }

    public function genero_planta() {
        return $this->belongsTo(Genero_planta::class, 'fk_genero_planta');
    }

    public function familia_planta() {
        return $this->belongsTo(Familia_planta::class, 'fk_familia_planta');
    }
}
