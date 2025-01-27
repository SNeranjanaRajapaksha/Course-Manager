<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for the table `lessons`.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content'); // Can store text or HTML
            $table->string('video_url')->nullable(); // Video hosting link
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations using migrate.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};

/**
     *end of the migrated file.
     */