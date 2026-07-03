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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();

    $table->string('name');

    $table->string('image')->nullable();

    $table->text('description')->nullable();

    $table->unsignedBigInteger('album_id');
            $table->foreign('album_id')
                ->references('id')
                ->on('albums')
                ->onDelete('cascade')
                ->onUpdate('cascade');

    $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onDelete('cascade')
                ->onUpdate('cascade');

    $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id')
                ->references('id')
                ->on('artists')
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
        Schema::dropIfExists('musics');
    }
};
