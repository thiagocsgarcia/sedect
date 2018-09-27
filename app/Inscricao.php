<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    protected $fillable = [
        'id',
        'id_participante',
        'id_vagas',
        'evento',
        'inativo'	
    ];

    protected $table = 'inscricoes';

    /* MUITOS para UM */
    public function participantes() {
        return $this->belongsTo(Participantes::class, 'id_participante');
    }
    /* UM para MUITOS */
    public function vagas() {
        return $this->hasMany(Vagas::class, 'id_vagas');
    }
    
}
