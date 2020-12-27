<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familia');
            $table->string('designacao');
            $table->unsignedBigInteger('sinonimo');
            $table->string('formula');
            $table->double('peso_molecular',8,8);
            $table->string('CAS');
            $table->unsignedBigInteger('condicoes_armazenamento');
            $table->boolean('ventilado');
            $table->string('anexo_sds');
            $table->double('stock',8,2);
            $table->double('stock_min',8,2);
            $table->string('foto');
            $table->unsignedBigInteger('sub_familia');

            $table->timestamps();

            $table->foreign('familia')->references('id')->on('familia');
            $table->foreign('sinonimo')->references('id')->on('produtos_sinonimo');
            $table->foreign('condicoes_armazenamento')->references('id')->on('condicoes_armazenamento');
            $table->foreign('sub_familia')->references('id')->on('sub_familia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
