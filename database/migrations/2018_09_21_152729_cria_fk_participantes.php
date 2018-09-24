<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaFkParticipantes extends Migration
{
    /***
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participantes', function ($table) {
            $table->foreign('systemId')->references('id')->on('users')->onDelete('cascade');
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
