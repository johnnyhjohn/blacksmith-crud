<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('oficina_id');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('oficina_id')->references('id')->on('oficinas');
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('oficina_produtos');
    }
}
