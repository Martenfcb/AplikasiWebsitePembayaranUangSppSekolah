<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

   protected $fillable = [
    'nama', 'nis', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir',
    'nik', 'agama', 'alamat', 'kelas_id', 'spp_id'
];


    /**
     * return $this->belongsTo(Kelas::class);Relasi ke model Kelas.
     * Satu siswa hanya milik satu kelas.
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    /**
     * Relasi ke model SPP.
     * Satu siswa hanya milik satu data SPP.
     */
    public function spp()
    {
        return $this->belongsTo(Spp::class);
}

    /**
     * Relasi ke model Pembayaran.
     * Satu siswa bisa memiliki banyak pembayaran.
     */
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
