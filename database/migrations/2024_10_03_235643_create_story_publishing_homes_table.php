<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('story_publishing_homes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('story_id')->constrained('stories');
            $table->foreignId('publishing_home_id')->constrained('publishing_homes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('story_publishing_homes');
    }
};
