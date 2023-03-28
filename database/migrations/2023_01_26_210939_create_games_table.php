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
        Schema::create('games', function (Blueprint $table) {
            $table->id('game_id');
            $table->string('name');
            $table->foreignId('category_id')->references('category_id')->on('categories')->constrained()->onDelete('cascade')->nullable();;
            $table->string('tags')->nullable();
            $table->string('link')->nullable();
            $table->string('play_link')->nullable();
            $table->text('description')->nullable();
            $table->text('how_to_play')->nullable();
            $table->string('walk_through_link')->nullable();
            $table->string('app_store_link')->nullable();
            $table->string('google_store_link')->nullable();
            $table->string('game_image')->nullable();
            $table->string('game_thumb')->nullable();
            $table->string('ifame_url')->nullable();
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
        Schema::dropIfExists('games');
    }
};
