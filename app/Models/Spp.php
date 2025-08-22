<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;

   protected $table = 'spp'; // wajib kalau nama tabel bukan bentuk jamak


   protected $fillable = ['tahun', 'nominal'];

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
public function kelas()
{
    return $this->belongsTo(Kelas::class, 'id');
}


}
