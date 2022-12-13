<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico-de-pontos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_funcionario');
            $table->dateTime('entrada');
            $table->dateTime('saida');
        });

        Schema::table('historico-de-pontos', function (Blueprint $table) {
            $table->foreign('id_funcionario')->references('id')->on('funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
