<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbExperienciaProfissional extends Migration
{
    /***
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias_profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_participante')->unsigned();
            $table->string('funcao', 255);
            $table->string('empregador', 255);
            $table->datetime('dt_inicio_exp');
            $table->string('periodo',255);
            $table->text('atividades_realizadas');
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
        Schema::dropIfExists('experiencia_profissional');
    }
    
}
