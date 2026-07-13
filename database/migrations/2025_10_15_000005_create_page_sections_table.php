<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page_slug'); // home, profile, services, contact
            $table->string('section_key'); // hero_title, hero_subtitle, etc.
            $table->longText('value')->nullable();
            $table->string('type')->default('text'); // text, textarea, image, json
            $table->timestamps();

            $table->unique(['page_slug', 'section_key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_sections');
    }
};
