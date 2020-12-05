<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePictogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictogramas', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('imagem');

            $table->timestamps();
        });

        Schema::create('produtos_pictogramas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('pictograma_id');

            $table->timestamps();

            $table->unique(['produto_id', 'pictograma_id']);
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('refeicao_id')->references('id')->on('refeicaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictogramas');
    }
}
