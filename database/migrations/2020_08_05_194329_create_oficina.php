<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficinas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('imagem');
            $table->string('localizacao');
            $table->string('latitude');
            $table->string('longitude');
            $table->unsignedBigInteger('vilarejo_id');
            $table->foreign('vilarejo_id')->references('id')->on('vilarejos');
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
        Schema::dropIfExists('oficinas');
    }
}
