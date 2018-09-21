<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vagas extends Model
{
    protected $fillable = [
        'id',
        'id_empresa',
        'cargo',
        'total_vagas',
        'exige_experiencia',
        'exige_registro_carteira',
        'escolaridade_minima',
        'escolaridade_desejavel',
        'pessoa_deficiente',
        'tipo_deficiencia',
        'exige_cnh',
        'categoria_cnh',
        'salario',
        'comissao',
        'beneficios',
        'regime_contrato',
        'jornada',
        'periodo_temp',
        'turno_matutino',
        'turno_vespertino',
        'turno_noturno',
        'dia_semana',
        'dia_sabado',
        'dia_domingo',
        'dia_feriado',
        'observacoes',
        'local_trabalho',
        'cidade_local_trabalho',
        'uf_local_trabalho',
        'cep_local_trabalho',
        'naturalidade_candidato',
        'quantidade_candidatos',
        'endereco_entrevista',
        'data'
    ];

    protected $table = 'vagas';
}
