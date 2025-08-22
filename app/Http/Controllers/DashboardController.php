<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Spp;
use App\Models\User;
use App\Models\Laporan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();
        $totalPembayaran = Pembayaran::sum('jumlah');
        $totalKelas = Kelas::count(); // 🟢 PENTING!
        $totalTagihan = Spp::where('status', 'aktif')->count();
        $totalUser = User::count();
        $totalSPP = Spp::count();
        $totalLaporan = Laporan::count();

        return view('admin.dashboard', compact(
            'totalSiswa',
            'totalPembayaran',
            'totalKelas',
            'totalTagihan',
            'totalUser',
            'totalSPP',
            'totalLaporan'
        ));
    }
}
