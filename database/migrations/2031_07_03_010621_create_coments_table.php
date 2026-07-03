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
        Schema::create('coments', function (Blueprint $table) {
            $table->id();

            $table->string('content');

            $table->unsignedBigInteger('music_id');
            $table->foreign('music_id')
                ->references('id')
                ->on('musics')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('like_id');
            $table->foreign('like_id')
                ->references('id')
                ->on('likes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coments');
    }
};
