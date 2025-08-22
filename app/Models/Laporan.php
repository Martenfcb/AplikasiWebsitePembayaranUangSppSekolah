<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan'; // Pastikan sesuai dengan nama tabel
    protected $fillable = ['judul', 'deskripsi', 'file']; // Sesuaikan jika ada kolom lain
}
