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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('image_path');
            $table->text('description');
            $table->dateTime('date');
            $table->string('image');
            $table->time('duration');
            $table->smallInteger('nb_attendees');
            $table->string('street');
            $table->string('house_number');
            $table->string('zip_code');
            $table->string('city');
            $table->string('country');
            $table->timestamps();
            $table->float('lat');
            $table->float('lon');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
