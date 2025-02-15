<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations using migrate.
     */
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('certificate_url'); // URL to download the certificate
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations using migrate.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
