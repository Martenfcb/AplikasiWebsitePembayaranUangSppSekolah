<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kelas;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;

class LaporanController extends Controller
{
    // Menampilkan data laporan di halaman web
   public function index(Request $request)
{
    $query = Pembayaran::with(['siswa.kelas']);

    if ($request->kelas_id) {
        $query->whereHas('siswa', function ($q) use ($request) {
            $q->where('kelas_id', $request->kelas_id);
        });
    }

    if ($request->nama) {
        $query->whereHas('siswa', function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->nama . '%');
        });
    }

    if ($request->nis) {
        $query->whereHas('siswa', function ($q) use ($request) {
            $q->where('nis', 'like', '%' . $request->nis . '%');
        });
    }

    // Filter berdasarkan bulan bayar
    if ($request->bulan) {
        // $request->bulan formatnya "YYYY-MM"
        $carbonDate = Carbon::createFromFormat('Y-m', $request->bulan);
        $query->whereYear('tanggal_bayar', $carbonDate->year)
              ->whereMonth('tanggal_bayar', $carbonDate->month);
    }

    $pembayaran = $query->get();
    $daftarKelas = Kelas::all();

    // Bisa tambahkan rekap jumlah siswa per kelas jika perlu di view
    $rekapSiswaPerKelas = []; // (kalau kamu sudah buat, kirim juga ke view)

    return view('laporan.index', compact('pembayaran', 'daftarKelas', 'rekapSiswaPerKelas'));
}

public function cetak(Request $request)
{
    $query = Pembayaran::with(['siswa.kelas']);

    if ($request->kelas_id) {
        $query->whereHas('siswa', function ($q) use ($request) {
            $q->where('kelas_id', $request->kelas_id);
        });
    }

    if ($request->nama) {
        $query->whereHas('siswa', function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->nama . '%');
        });
    }

    if ($request->nis) {
        $query->whereHas('siswa', function ($q) use ($request) {
            $q->where('nis', 'like', '%' . $request->nis . '%');
        });
    }

    // Filter berdasarkan bulan bayar
    if ($request->bulan) {
        $carbonDate = Carbon::createFromFormat('Y-m', $request->bulan);
        $query->whereYear('tanggal_bayar', $carbonDate->year)
              ->whereMonth('tanggal_bayar', $carbonDate->month);
    }

    $pembayaran = $query->get();

    $pdf = Pdf::loadView('laporan.cetak', compact('pembayaran'))->setPaper('A4', 'landscape');
    return $pdf->download('laporan-pembayaran.pdf');
}
}
