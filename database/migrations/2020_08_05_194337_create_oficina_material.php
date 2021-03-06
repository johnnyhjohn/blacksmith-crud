<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinaMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina_materials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('oficina_id');
            $table->unsignedBigInteger('material_id');
            $table->foreign('oficina_id')->references('id')->on('oficinas');
            $table->foreign('material_id')->references('id')->on('materials');
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
        Schema::dropIfExists('oficina_materials');
    }
}
