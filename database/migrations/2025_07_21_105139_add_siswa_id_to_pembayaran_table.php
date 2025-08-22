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
        Schema::table('pembayaran', function (Blueprint $table) {
        $table->unsignedBigInteger('siswa_id')->after('id');

        // Tambahkan relasi foreign key ke tabel siswa
        $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('pembayaran', function (Blueprint $table) {
        $table->dropForeign(['siswa_id']);
        $table->dropColumn('siswa_id');
    });
    }
};
