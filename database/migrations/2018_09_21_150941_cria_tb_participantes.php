<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbParticipantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('systemId')->unsigned();
            $table->string('nome', 191);
            $table->string('dt_nascimento', 191);
            $table->longtext('profissao');
            $table->string('rg', 191);
            $table->string('cpf', 191);
            $table->string('tel_residencial', 191);
            $table->string('celular', 191);
            $table->string('email', 191);
            $table->string('cep', 191);
            $table->string('endereco', 191);
            $table->string('numero', 191);
            $table->string('complemento', 191);
            $table->string('bairro', 191);
            $table->string('cidade', 191);
            $table->string('uf', 191);
            $table->integer('pessoa_com_deficiencia');
            $table->string('tipo_deficiencia', 191);
            $table->string('escolaridade', 255);
            $table->string('evento', 255);
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
        Schema::dropIfExists('participantes');
    }
}
