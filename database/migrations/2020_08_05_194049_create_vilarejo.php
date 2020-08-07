<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVilarejo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vilarejos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sigla', 2);
            $table->unsignedBigInteger('reino_id');
            $table->foreign('reino_id')->references('id')->on('reinos');
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
        Schema::dropIfExists('vilarejos');
    }
}
