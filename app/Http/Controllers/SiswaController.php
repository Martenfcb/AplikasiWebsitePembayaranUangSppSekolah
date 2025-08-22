<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use PDF;

class SiswaController extends Controller
{

    public function dashboard()
{
    return view('siswa.dashboard');
}

    /**
     * Menampilkan semua data siswa.
     */
    public function index()
    {
        $siswa = Siswa::with('kelas', 'spp')->get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Menampilkan form tambah siswa.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('siswa.create', compact('kelas', 'spp'));
    }

    /**
     * Menyimpan data siswa baru.
     */
public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nis' => 'required|string|max:50|unique:siswa,nis',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'tempat_lahir' => 'required|string|max:100',
        'tanggal_lahir' => 'required|date',
        'nik' => 'nullable|string|max:20',
        'agama' => 'required|string|max:50',
        'alamat' => 'required|string',
        'kelas_id' => 'required|exists:kelas,id',
        'spp_id' => 'required|exists:spp,id',
    ], [
        'nis.unique' => 'NIS sudah terdaftar, silakan masukkan NIS lain.'
    ]);

    \App\Models\Siswa::create($request->all());

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
}


    /**
     * Menampilkan form edit siswa.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('siswa.edit', compact('siswa', 'kelas', 'spp'));
    }

    /**
     * Memperbarui data siswa.
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:siswa,nis,' . $siswa->id,
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'nik' => 'nullable|string|max:20|unique:siswa,nik,' . $siswa->id,
            'agama' => 'required|string|max:20',
            'alamat' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',
            'spp_id' => 'required|exists:spp,id',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    /**
     * Menghapus data siswa.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }

    /**
     * Menampilkan status pembayaran siswa yang sedang login.
     */
    public function status()
    {
        $user = auth()->user();
        if (!$user || !$user->siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
        }

        $siswa = $user->siswa;

        return view('siswa.pembayaran.status', compact('siswa'));
    }

    /**
     */
    public function riwayat()
    {
        $user = auth()->user();
        if (!$user || !$user->siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan.');
        }

        $siswa = $user->siswa;
        $riwayat = $siswa->pembayaran()->latest()->get();

        return view('siswa.pembayaran.riwayat', compact('riwayat'));
    }

    /**
     * Menampilkan detail data siswa.
     */
    public function show($id)
    {
        $siswa = Siswa::with('kelas', 'spp')->findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function exportExcel()
{
    return Excel::download(new SiswaExport, 'data_siswa.xlsx');
}

public function exportPDF()
{
    $siswa = Siswa::with(['kelas', 'spp'])->get();
    $pdf = PDF::loadView('siswa.pdf', compact('siswa'));
    return $pdf->download('data_siswa.pdf');
}

public function import(Request $request)
{
    SiswaImport::$errorMessage = null;

    Excel::import(new SiswaImport, $request->file('file'));

    if (SiswaImport::$errorMessage) {
        return back()->with('warning', SiswaImport::$errorMessage);
    }

    return back()->with('success', 'Data siswa berhasil diimpor.');
}

}
