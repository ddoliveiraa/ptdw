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
        Schema::create('advertencia', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_pictogramas');
            $table->string('texto');

            $table->timestamps();
        });

        Schema::create('pictogramas_advertencia', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pictograma_id');
            $table->unsignedBigInteger('advertencia_id');

            $table->timestamps();

            $table->unique(['pictograma_id', 'advertencia_id']);
            $table->foreign('pictograma_id')->references('id')->on('pictogramas');
            $table->foreign('advertencia_id')->references('id')->on('advertencia');
        });
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
