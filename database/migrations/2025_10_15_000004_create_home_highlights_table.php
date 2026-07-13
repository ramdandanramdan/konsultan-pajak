<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_highlights', function (Blueprint $table) {
            $table->id();
            $table->string('value'); // e.g. "10+"
            $table->string('label'); // e.g. "Tahun Pengalaman"
            $table->string('icon')->default('clock'); // clock, users, check, document
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_highlights');
    }
};
