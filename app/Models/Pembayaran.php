<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model 
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'siswa_id',
        'jumlah',
        'tanggal_bayar'
    ];

      public function spp()
    {
        return $this->belongsTo(Spp::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
