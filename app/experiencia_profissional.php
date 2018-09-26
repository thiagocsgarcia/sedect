<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experiencia_profissional extends Model
{
    
    protected $fillable = [
        'id',
        'systemId',
        'funcao',
        'empregador',
        'dt_inicio_exp',
        'periodo',
        'atividades_realizadas'
    ];

    protected $table = 'experiencia_profissional';

    public function user() {
        return $this->belongsTo(user::class, 'systemId');
    }
    
}
