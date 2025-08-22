<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    public function index()
    {
        $spp = Spp::all();
        return view('spp.index', compact('spp'));
    }

    public function create()
{
    $kelas = \App\Models\Kelas::all();
    return view('spp.create', compact('kelas'));
}


public function store(Request $request)
{
    $request->validate([
        'tahun' => 'required|integer|min:2000|max:2100|unique:spp,tahun',
        'nominal' => 'required|integer|min:0'
    ], [
        'tahun.unique' => 'Tahun SPP sudah ada, silakan gunakan tahun lain.'
    ]);

    \App\Models\Spp::create([
        'tahun' => $request->tahun,
        'nominal' => $request->nominal
    ]);

    return redirect()->route('spp.index')->with('success', 'Data SPP berhasil ditambahkan.');
}



    public function edit($id)
    {
        $spp = Spp::findOrFail($id);
        return view('spp.edit', compact('spp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'nominal' => 'required|numeric',
        ]);

        $spp = Spp::findOrFail($id);
        $spp->update([
            'nama_tagihan' => 'SPP Tahun ' . $request->tahun,
            'tahun' => $request->tahun,
            'nominal' => $request->nominal, // ✅ pakai 'nominal'
        ]);

        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $spp = Spp::findOrFail($id);
        $spp->delete();

        return redirect()->route('spp.index')->with('success', 'Data SPP berhasil dihapus.');
    }
}
