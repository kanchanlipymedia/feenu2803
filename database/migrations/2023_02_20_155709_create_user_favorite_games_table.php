<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favorite_games', function (Blueprint $table) {
            $table->id('user_favorite_game_id');
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->foreignId('game_id')->references('game_id')->on('games')->constrained()->onDelete('cascade');
            $table->integer('favorite_status');
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
        Schema::dropIfExists('user_favorite_games');
    }
};
