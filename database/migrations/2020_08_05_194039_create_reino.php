<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reino', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla', 2);
            $table->unsignedBigInteger('id_imperio');
            $table->foreign('id_imperio')->references('id')->on('imperio');
            $table->string('imagem');
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
        Schema::dropIfExists('reino');
    }
}
