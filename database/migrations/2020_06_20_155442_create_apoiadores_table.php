<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApoiadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Apoiadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->longText('sobre');
            $table->string('logo');
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
        Schema::table('Apoiadores', function (Blueprint $table) {
            //
        });
    }
}
