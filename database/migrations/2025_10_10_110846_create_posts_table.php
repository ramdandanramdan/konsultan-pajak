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
        // Membuat tabel 'posts' untuk menampung konten NEWS dan KNOWLEDGE BASE
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            
            // Tipe konten: NEWS, KNOWLEDGE (Peraturan), atau OPINION
            $table->enum('type', ['NEWS', 'KNOWLEDGE', 'OPINION'])->default('KNOWLEDGE');
            
            $table->string('title');
            $table->string('slug')->unique(); // Untuk URL yang SEO-friendly
            $table->text('content');
            $table->string('author')->default('Tim Analis');
            
            // Kolom Tambahan untuk Data Perpajakan (Sesuai permintaan Anda: No Aturan, Jenis, Lokasi)
            $table->string('regulation_number')->nullable()->comment('Nomor atau Peraturan Terkait');
            $table->string('regulation_type')->nullable()->comment('Jenis Aturan (misal: UU, PP, PMK)');
            $table->string('regulation_location')->nullable()->comment('Wilayah Berlaku (misal: Nasional, Regional)');
            
            $table->boolean('is_published')->default(false);
            
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
