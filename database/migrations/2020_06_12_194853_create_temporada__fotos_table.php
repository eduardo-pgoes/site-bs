<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporadaFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporada__fotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('temporada_id');
            
            $table->string('caminho');
            $table->timestamps();

            $table->foreign('temporada_id')->references('id')->on('temporadas')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporada__fotos');
    }
}
