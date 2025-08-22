<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('spp', function (Blueprint $table) {
            // Drop foreign key dulu
            $table->dropForeign(['kelas_id']);
            // Lalu drop kolomnya
            $table->dropColumn('kelas_id');
        });
    }

    public function down(): void
    {
        Schema::table('spp', function (Blueprint $table) {
            $table->unsignedBigInteger('kelas_id')->nullable();

            // Optional: jika ingin mengembalikan foreign key
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
        });
    }
};

