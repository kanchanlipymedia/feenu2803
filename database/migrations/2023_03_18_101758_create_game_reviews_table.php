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
        Schema::create('game_reviews', function (Blueprint $table) {
            $table->id('game_review_id');
            $table->integer('rating')->default(0);
            $table->string('comment')->nullable();
            $table->foreignId('given_by')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->integer('status')->default(1)->comment('0=>pending,1=>Approved');
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
        Schema::dropIfExists('game_ratings');
    }
};
