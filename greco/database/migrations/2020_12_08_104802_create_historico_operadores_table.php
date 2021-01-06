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
        Schema::create('historico_operadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_adm');
            $table->unsignedBigInteger('operador');
            $table->date('data');
            $table->integer('operacao');
            $table->string('obs')->nullable();

            $table->timestamps();

            $table->foreign('operador')->references('id')->on('operadors');

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
