<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inventario');
            $table->integer('id_ordem');
            $table->unsignedBigInteger('sala');
            $table->unsignedBigInteger('armario');
            $table->unsignedBigInteger('prateleira');
            $table->unsignedBigInteger('fornecedor');
            $table->unsignedBigInteger('marca');
            $table->string('referencia');
            $table->double('preco',8,2);
            $table->unsignedBigInteger('iva');
            $table->integer('capacidade');
            $table->unsignedBigInteger('tipo_embalagem');
            $table->unsignedBigInteger('estado_fisico')->nullable();
            $table->unsignedBigInteger('cor');
            $table->unsignedBigInteger('textura_viscosidade')->nullable();
            $table->double('peso_bruto');
            $table->date('data_entrada');
            $table->date('data_abertura')->nullable();
            $table->date('data_validade');
            $table->date('data_termino')->nullable();
            $table->unsignedBigInteger('operador');
            $table->unsignedBigInteger('unidade');
            $table->string('obs')->nullable();

            $table->timestamps();

            $table->foreign('id_inventario')->references('id')->on('produtos');
            $table->foreign('sala')->references('id')->on('sala');
            $table->foreign('armario')->references('id')->on('armario');
            $table->foreign('prateleira')->references('id')->on('prateleira');
            $table->foreign('fornecedor')->references('id')->on('fornecedors');
            $table->foreign('iva')->references('id')->on('_i_v_a');
            $table->foreign('tipo_embalagem')->references('id')->on('tipo_embalagem');
            $table->foreign('estado_fisico')->references('id')->on('estados_fisicos');
            $table->foreign('cor')->references('id')->on('cores');
            $table->foreign('textura_viscosidade')->references('id')->on('textura_viscosidade');
            $table->foreign('operador')->references('id')->on('operadors');
            $table->foreign('marca')->references('id')->on('marcas');
            $table->foreign('unidade')->references('id')->on('unidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
}
