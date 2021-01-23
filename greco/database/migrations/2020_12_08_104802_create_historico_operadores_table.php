<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoOperadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacaos', function (Blueprint $table) {
            $table->id();
            $table->string('operacao');
        });

        Schema::create('historico_operadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_adm');
            $table->unsignedBigInteger('operador');
            $table->date('data');
            $table->unsignedBigInteger('operacao'); //acao, se foi registo, etc
            $table->integer('id_registo'); //se foi uma entrada, saida, um produto, cliente, wtv 
            $table->string('obs')->nullable();

            $table->timestamps();

            $table->foreign('operador')->references('id')->on('operadors');
            $table->foreign('operacao')->references('id')->on('operacaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_operadores');
    }
}
