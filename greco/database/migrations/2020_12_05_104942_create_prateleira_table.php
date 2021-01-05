<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrateleiraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prateleira', function (Blueprint $table) {
            $table->id();
            $table->string('prateleira');
            $table->unsignedBigInteger('id_armario');
            $table->timestamps();

            $table->foreign('id_armario')->references('id')->on('armario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prateleira');
    }
}
