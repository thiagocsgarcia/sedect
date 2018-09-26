<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTbEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razao', 191);
            $table->string('fantasia', 191)->nullable();
            $table->string('cnpj', 191)->nullable();
            $table->string('municipal', 191);
            $table->string('estadual', 191);
            $table->string('atividade', 191);
            $table->string('responsavel', 191)->nullable();
            $table->string('email', 191);
            $table->string('telefone', 191)->nullable();
            $table->string('cep', 191)->nullable();
            $table->string('logradouro', 191)->nullable();
            $table->string('numero', 191);
            $table->string('complemento', 191);
            $table->string('bairro', 191)->nullable();
            $table->string('cidade', 191)->nullable();
            $table->string('uf', 191)->nullable();
            $table->timestamps();
        });
    }

    /***
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
    
}
