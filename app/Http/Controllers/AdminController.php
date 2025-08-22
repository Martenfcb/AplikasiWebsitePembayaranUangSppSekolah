<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;

class AdminController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();
        $totalPembayaran = Pembayaran::count();
        $totalLaporan = 10;

        return view('admin.dashboard', compact('totalSiswa', 'totalPembayaran', 'totalLaporan'));
    }
}
