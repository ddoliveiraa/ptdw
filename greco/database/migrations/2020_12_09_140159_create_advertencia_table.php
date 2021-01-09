<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertencias', function (Blueprint $table) {
            $table->id();

       //     $table->unsignedBigInteger('id_pictogramas');
            $table->string('texto');

            $table->timestamps();
        });

        Schema::create('advertencia_produto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('advertencia_id');

            $table->timestamps();

            $table->unique(['produto_id', 'advertencia_id']);
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('advertencia_id')->references('id')->on('advertencias');
        });

        // Schema::create('pictogramas_advertencia', function (Blueprint $table) {
        //     $table->id();

        //     $table->unsignedBigInteger('pictograma_id');
        //     $table->unsignedBigInteger('advertencia_id');

        //     $table->timestamps();

        //     $table->unique(['pictograma_id', 'advertencia_id']);
        //     $table->foreign('pictograma_id')->references('id')->on('pictogramas');
        //     $table->foreign('advertencia_id')->references('id')->on('advertencia');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertencia');
    }
}
