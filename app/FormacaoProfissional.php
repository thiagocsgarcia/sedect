<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormacaoProfissional extends Model
{
    protected $fillable = [
        'id',
        'systemId',
        'curso',
        'instituicao',
        'dt_inicio_curso',
        'duracao',
        'nivel'    
    ];

    protected $table = 'formacao_profissional';

    /* MUITOS para UM */
    public function user() {
        return $this->belongsTo(User::class, 'systemId');
    }
    
}
