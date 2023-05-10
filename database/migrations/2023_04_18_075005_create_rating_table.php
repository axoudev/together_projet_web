<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('rated_user_id');
            $table->unsignedBigInteger('rater_user_id');
            $table->tinyInteger('rate');

            $table->foreign('rated_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('rater_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
