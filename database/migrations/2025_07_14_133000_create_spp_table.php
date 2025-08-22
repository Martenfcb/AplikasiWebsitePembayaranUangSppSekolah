<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('spp', function (Blueprint $table) {
            $table->id();
            $table->year('tahun'); // Menyimpan tahun seperti 2024
            $table->decimal('nominal', 12, 2); // Menggunakan nama kolom "nominal" sesuai kebutuhan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('spp');
    }
};
