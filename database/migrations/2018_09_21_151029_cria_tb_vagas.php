<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbVagas extends Migration
{
    /***
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa')->unsigned();
            $table->string('cargo', 191);
            $table->integer('total_vagas');
            $table->integer('exige_experiencia');
            $table->integer('exige_registro_carteira');
            $table->string('escolaridade_minima', 191);
            $table->string('escolaridade_desejavel', 191);
            $table->integer('pessoa_deficiente');
            $table->string('tipo_deficiencia', 191);
            $table->integer('exige_cnh');
            $table->string('categoria_cnh', 191);
            $table->string('salario', 199);
            $table->string('comissao', 191);
            $table->string('beneficios', 191);
            $table->string('regime_contrato', 191);
            $table->string('jornada', 191);
            $table->string('periodo_temp', 191);
            $table->integer('turno_matutino');
            $table->integer('turno_vespertino');
            $table->integer('turno_noturno');
            $table->string('dia_semana', 2);
            $table->string('dia_sabado', 2);
            $table->string('dia_domingo', 2);
            $table->string('dia_feriado', 2);
            $table->longtext('observacoes');
            $table->longtext('local_trabalho');
            $table->string('cidade_local_trabalho', 191);
            $table->string('uf_local_trabalho', 191);
            $table->string('cep_local_trabalho', 191);
            $table->string('naturalidade_candidato', 191);
            $table->string('quantidade_candidatos', 191);
            $table->string('endereco_entrevista', 255);
            $table->datetime('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
