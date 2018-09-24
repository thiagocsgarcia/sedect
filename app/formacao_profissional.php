<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formacao_profissional extends Model
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

    //MUITOS para UM
    public function user() {
        return $this->belongsTo(user::class, 'systemId');
    }
    
}
