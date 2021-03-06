<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'id',
        'razao',
        'fantasia',
        'cnpj',
        'municipal',
        'estadual',
        'atividade',
        'responsavel',
        'email',
        'telefone',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf'
    ];

    /* Inserido para evitar problemas com a lingua portuguesa */
    protected $table = 'empresas';

    /* UM para MUITOS */
    public function vagas() {
        return $this->hasMany(Vagas::class, 'id_empresa');
    }
    
}
