<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saidas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_produto');
            $table->integer('id_ordem');
            $table->unsignedBigInteger('id_solicitante');
            $table->unsignedBigInteger('id_operador');
            $table->string('obs');

            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_produto')->references('id')->on('produto');
            $table->foreign('id_solicitante')->references('id')->on('solicitante');
            $table->foreign('id_operador')->references('id')->on('operador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saidas');
    }
}
