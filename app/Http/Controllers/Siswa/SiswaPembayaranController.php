<?php
namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;

class SiswaPembayaranController extends Controller
{
    public function index()
    {
        return view('siswa.pembayaran.index');
    }

    public function cek(Request $request)
    {
        $request->validate([
            'nis' => 'required|numeric'
        ]);

        $siswa = Siswa::where('nis', $request->nis)->first();

        if (!$siswa) {
            return redirect()->back()->with('error', 'Siswa dengan NIS tersebut tidak ditemukan.');
        }

        $pembayaran = Pembayaran::where('siswa_id', $siswa->id)->orderBy('tanggal', 'desc')->get();

        return view('siswa.pembayaran.hasil', compact('siswa', 'pembayaran'));
    }
public function cekPembayaran(Request $request)
{
    $request->validate([
        'nis' => 'required|numeric'
    ]);

    $siswa = \App\Models\Siswa::where('nis', $request->nis)->first();

    if (!$siswa) {
        return back()->with('error', 'Siswa dengan NIS tersebut tidak ditemukan.');
    }

    $pembayaran = \App\Models\Pembayaran::where('siswa_id', $siswa->id)->get();

    return view('siswa.pembayaran.status', compact('pembayaran'));
}


}
