<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomendacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomendacoes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_pictogramas');
            $table->string('texto');

            $table->timestamps();
        });

        Schema::create('pictogramas_recomendacoes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pictograma_id');
            $table->unsignedBigInteger('recomendacao_id');

            $table->timestamps();

            $table->unique(['pictograma_id', 'recomendacao_id']);
            $table->foreign('pictograma_id')->references('id')->on('pictogramas');
            $table->foreign('recomendacao_id')->references('id')->on('recomendacoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recomendacoes');
    }
}
