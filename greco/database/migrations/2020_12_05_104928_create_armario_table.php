<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armario', function (Blueprint $table) {
            $table->id();
            $table->string('armario');
            $table->unsignedBigInteger('id_sala');
            $table->timestamps();

            $table->foreign('id_sala')->references('id')->on('sala');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armario');
    }
}
