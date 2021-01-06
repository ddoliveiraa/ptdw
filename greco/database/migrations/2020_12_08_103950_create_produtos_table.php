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
            $table->string('formula')->nullable();
            $table->double('peso_molecular',8,8)->nullable();
            $table->string('CAS')->nullable();
            $table->unsignedBigInteger('condicoes_armazenamento')->nullable();
            $table->boolean('ventilado')->nullable();
            $table->string('anexo_sds')->nullable();
            $table->double('stock',8,2)->default(0);
            $table->double('stock_min',8,2);
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('sub_familia')->nullable();

            $table->timestamps();

            $table->foreign('familia')->references('id')->on('familia');
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
