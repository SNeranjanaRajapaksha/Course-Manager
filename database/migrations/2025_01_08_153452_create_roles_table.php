<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations using migrate.
     */

     //php artisan make:migration create_roles_table
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., Instructor, Student
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations using migrate.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
