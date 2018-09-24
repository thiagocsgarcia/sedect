<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbInscricoes extends Migration
{
    /***
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_participante')->unsigned();            
            $table->integer('id_vagas')->unsigned();
            $table->integer('id_oficina')->unsigned();
            $table->string('evento', 255);
            $table->integer('inativo');
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
        Schema::dropIfExists('inscricoes');
    }
}
