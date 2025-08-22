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
    Schema::table('siswa', function (Blueprint $table) {
        if (!Schema::hasColumn('siswa', 'tempat_lahir')) {
            $table->string('tempat_lahir')->after('jenis_kelamin');
        }
        if (!Schema::hasColumn('siswa', 'tanggal_lahir')) {
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
        }
        if (!Schema::hasColumn('siswa', 'nik')) {
            $table->string('nik')->unique()->after('tanggal_lahir');
        }
        if (!Schema::hasColumn('siswa', 'agama')) {
            $table->string('agama')->after('nik');
        }
        if (!Schema::hasColumn('siswa', 'alamat')) {
            $table->text('alamat')->after('agama');
        }
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswa', function (Blueprint $table) {
            $table->dropColumn([
                'jenis_kelamin',
                'tempat_lahir',
                'tanggal_lahir',
                'nik',
                'agama',
                'alamat',
            ]);
        });
    }
};
