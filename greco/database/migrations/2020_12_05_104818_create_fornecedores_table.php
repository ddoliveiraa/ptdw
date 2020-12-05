<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->string('morada');
            $table->string('localidade');
            $table->string('codigopostal');
            $table->string('telefone');
            $table->integer('NIF');
            $table->string('email');

            $table->string('vendedor1');
            $table->string('telefone1');
            $table->string('email1');

            $table->string('vendedor2');
            $table->string('telefone2');
            $table->string('email2');

            $table->string('condicoes_especiais');
            $table->string('obs');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}
