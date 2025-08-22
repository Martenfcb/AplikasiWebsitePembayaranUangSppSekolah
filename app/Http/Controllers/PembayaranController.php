<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;


class PembayaranController extends Controller
{
    // Menampilkan semua data pembayaran
    public function index()
    {
        $pembayaran = Pembayaran::with(['siswa.kelas', 'siswa.spp'])->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    // Menampilkan form tambah pembayaran
    public function create()
    {
        $siswa = Siswa::with(['spp', 'kelas'])->get();
        return view('pembayaran.create', compact('siswa'));
    }

    // Simpan data pembayaran
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id'      => 'required|exists:siswa,id',
            'jumlah'        => 'required|numeric|min:1',
            'tanggal_bayar' => 'required|date',
        ]);

        try {
            Pembayaran::create([
                'siswa_id'      => $request->siswa_id,
                'jumlah'        => $request->jumlah,
                'tanggal_bayar' => $request->tanggal_bayar,
            ]);

            return redirect()->route('pembayaran.index')->with('success', '✅ Data pembayaran berhasil disimpan.');
        } catch (\Exception $e) {
            Log::error('❌ Gagal menyimpan pembayaran: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', '❌ Gagal menyimpan data pembayaran.');
        }
    }

    // Tampilkan form edit pembayaran
    public function edit($id)
    {
        $pembayaran = Pembayaran::with('siswa')->findOrFail($id);
        $siswaList = Siswa::with(['spp', 'kelas'])->get();
        return view('pembayaran.edit', compact('pembayaran', 'siswaList'));
    }

    // Update data pembayaran
    public function update(Request $request, $id)
    {
        $request->validate([
            'siswa_id'      => 'required|exists:siswa,id',
            'jumlah'        => 'required|numeric|min:1',
            'tanggal_bayar' => 'required|date',
        ]);

        try {
            $pembayaran = Pembayaran::findOrFail($id);
            $pembayaran->update([
                'siswa_id'      => $request->siswa_id,
                'jumlah'        => $request->jumlah,
                'tanggal_bayar' => $request->tanggal_bayar,
            ]);

            return redirect()->route('pembayaran.index')->with('success', '✅ Data pembayaran berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('❌ Gagal update pembayaran: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', '❌ Gagal update data pembayaran.');
        }
    }

    // Hapus data pembayaran
    public function destroy($id)
    {
        try {
            $pembayaran = Pembayaran::findOrFail($id);
            $pembayaran->delete();

            return redirect()->route('pembayaran.index')->with('success', '🗑️ Data pembayaran berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('❌ Gagal hapus pembayaran: ' . $e->getMessage());
            return redirect()->route('pembayaran.index')->with('error', '❌ Gagal menghapus pembayaran.');
        }
    }

    // Status pembayaran (untuk siswa yang login)
    public function statusPembayaranSiswa()
    {
        $siswa = Auth::user();

        if (!$siswa) {
            abort(403, 'Akses ditolak.');
        }

        $pembayaran = Pembayaran::where('siswa_id', $siswa->id)->get();
        return view('siswa.status', compact('pembayaran'));
    }

    // Cetak bukti pembayaran
public function cetakBukti($id)
{
    $pembayaran = Pembayaran::with('siswa.kelas')->findOrFail($id);

    $data = (object)[
        'nis' => $pembayaran->siswa->nis,
        'nama' => $pembayaran->siswa->nama,
        'kelas' => $pembayaran->siswa->kelas->nama ?? '-', // ambil dari relasi
        'tanggal_bayar' => $pembayaran->created_at,
        'jumlah' => $pembayaran->jumlah,
        'keterangan' => $pembayaran->status ?? 'Lunas',
    ];

    return view('siswa.cetak-bukti', compact('data'));
}


    // Autocomplete cari siswa berdasarkan NIS/nama
    public function cariSiswa(Request $request)
    {
        $keyword = $request->q;

        $data = Siswa::with(['kelas', 'spp'])
            ->where('nama', 'like', "%{$keyword}%")
            ->orWhere('nis', 'like', "%{$keyword}%")
            ->get()
            ->map(function ($siswa) {
                return [
                    'id'      => $siswa->id,
                    'nis'     => $siswa->nis,
                    'nama'    => $siswa->nama,
                    'kelas'   => $siswa->kelas->nama_kelas ?? '-',
                    'nominal' => $siswa->spp->nominal ?? 0,
                ];
            });

        return response()->json($data);
    }
    public function cetakPDF()
{
    $pembayaran = Pembayaran::with(['siswa.kelas'])->get();

    $pdf = Pdf::loadView('laporan.cetak', compact('pembayaran'))->setPaper('A4', 'portrait');

    return $pdf->stream('laporan-pembayaran.pdf');
}
public function laporan(Request $request)
{
    $kelas_id = $request->kelas_id;

    $pembayaran = Pembayaran::with('siswa.kelas')
        ->when($kelas_id, function ($query) use ($kelas_id) {
            $query->whereHas('siswa.kelas', function ($q) use ($kelas_id) {
                $q->where('id', $kelas_id);
            });
        })->get();

    $daftarKelas = \App\Models\Kelas::orderBy('nama_kelas')->get();

    // Rekap total siswa per kelas
    $rekapSiswaPerKelas = \App\Models\Kelas::withCount('siswa')->pluck('siswa_count', 'nama_kelas');

    return view('laporan.index', compact('pembayaran', 'daftarKelas', 'rekapSiswaPerKelas'));
}

}
