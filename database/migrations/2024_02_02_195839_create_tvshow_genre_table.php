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
        Schema::create('tvshow_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tv_show_id')->constraind()->onDelete('cascade');
            $table->foreignId('genre_id')->constraind()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tvshow_genre');
    }
};
