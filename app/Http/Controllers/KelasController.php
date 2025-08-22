<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\KelasImport;
use Maatwebsite\Excel\Facades\Excel;


class KelasController extends Controller
{
    // Tampilkan semua data kelas
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    // Tampilkan form tambah data
    public function create()
    {
        return view('kelas.create');
    }

    // Simpan data baru
    public function store(Request $request)
{
    $request->validate([
        'nama_kelas' => 'required|string|max:100|unique:kelas,nama_kelas',
        'wali_kelas' => 'required|string|max:100'
    ], [
        'nama_kelas.unique' => 'Nama kelas sudah ada, silakan gunakan nama lain.'
    ]);

    \App\Models\Kelas::create([
        'nama_kelas' => $request->nama_kelas,
        'wali_kelas' => $request->wali_kelas
    ]);

    return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
}


    // Tampilkan form edit
    public function edit($id)
{
    $kelas = Kelas::findOrFail($id);
    return view('kelas.edit', compact('kelas'));
}

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui.');
    }

    // Hapus data
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus.');
    }
//     public function show($id)
// {
//     $kelas = Kelas::with('siswa')->findOrFail($id);
//     return view('kelas.show', compact('kelas'));
// }

public function exportExcel()
{
    return Excel::download(new KelasExport, 'data_kelas.xlsx');
}

public function exportPDF()
{
    $kelas = Kelas::all();
    $pdf = PDF::loadView('kelas.export_pdf', compact('kelas'));
    return $pdf->download('data_kelas.pdf');
}

public function exportAllExcel()
{
    return Excel::download(new KelasExport, 'semua_kelas.xlsx');
}

public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xls,xlsx',
    ]);

    Excel::import(new KelasImport, $request->file('file'));
    
    return redirect()->route('kelas.index')->with('success', 'Data berhasil diimpor.');
}




}
