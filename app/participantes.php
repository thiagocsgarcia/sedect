<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participantes extends Model
{
    protected $fillable = [
        'id',
        'systemId',
        'nome',
        'dt_nascimento',
        'profissao',
        'rg',
        'cpf',
        'tel_residencial',
        'celular',
        'email',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'pessoa_com_deficiencia',
        'tipo_deficiencia',
        'escolaridade',
        'evento'    
    ];

    protected $table = 'participantes';
    
}
