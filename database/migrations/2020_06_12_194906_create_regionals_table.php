<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('temporada_id');

            $table->string('nome');
            $table->string('local');
            $table->string('data');
            $table->string('classificacao');
            $table->string('premios')->nullable();
            $table->timestamps();
            
            $table->foreign('temporada_id')->references('id')->on('temporadas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regionals');
    }
}
