<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbFormacaoProfissional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacao_profissional', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('systemId')->unsigned();
            $table->string('curso', 255);
            $table->string('instituicao', 255);
            $table->datetime('dt_inicio_curso');
            $table->string('duracao', 255);
            $table->string('nivel', 255);
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
        Schema::dropIfExists('formacao_profissional');
    }
}
