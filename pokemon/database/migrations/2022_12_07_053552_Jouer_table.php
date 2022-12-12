<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JouerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('jouer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('combat_id')->references('id')->on('combat');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('pokemon_id')->references('id')->on('pokemon');
            
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
        Schema::dropIfExists('jouer');
    }
}