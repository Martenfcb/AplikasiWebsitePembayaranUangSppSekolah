@extends('layouts.app')

@section('content')
<!-- AOS Animate Scroll -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

<style>
    .card-header-custom {
        background: linear-gradient(to right, #3f51b5, #2196f3);
        color: white;
        padding: 20px;
        border-radius: 8px 8px 0 0;
        margin-bottom: 0;
    }

    .badge-ringkasan {
        background-color: #e3f2fd;
        color: #0d47a1;
        padding: 6px 14px;
        border-radius: 30px;
        font-weight: 500;
        margin-right: 8px;
        font-size: 0.85rem;
    }

    .btn-cetak {
        background: #dc3545;
        color: white;
        box-shadow: 0 4px 10px rgba(220, 53, 69, 0.3);
        transition: 0.3s ease;
    }

    .btn-cetak:hover {
        background: #bb2d3b;
    }

    .table-hover tbody tr:hover {
        background-color: #f0f8ff;
    }

    .table th {
        background-color: #007bff;
        color: white;
        vertical-align: middle;
    }

    .table td {
        vertical-align: middle;
    }

    .summary-box {
        background-color: #f8f9fa;
        border-left: 4px solid #0d6efd;
        padding: 12px 18px;
        margin-bottom: 16px;
        border-radius: 6px;
        font-weight: 500;
    }

    .form-select {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
</style>

<div class="container" data-aos="fade-up" data-aos-duration="600">
    <div class="card shadow">
        <div class="card-header card-header-custom">
            <h4 class="mb-0"><i class="bi bi-receipt-cutoff"></i> Laporan Pembayaran SPP</h4>
        </div>

        <div class="card-body">
            {{-- 🔍 Filter Kelas --}}
           <form action="{{ route('laporan.index') }}" method="GET" class="row g-3 mb-4" data-aos="fade-down">
    <div class="col-md-3">
        <label class="form-label">Filter berdasarkan kelas</label>
        <select name="kelas_id" class="form-select">
            <option value="">📚 Semua Kelas</option>
            @foreach ($daftarKelas as $kelas)
                <option value="{{ $kelas->id }}" {{ request('kelas_id') == $kelas->id ? 'selected' : '' }}>
                    {{ $kelas->nama_kelas }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Filter Bulan -->
    <div class="col-md-3">
        <label class="form-label">Filter berdasarkan bulan bayar</label>
        <input type="month" name="bulan" class="form-control" value="{{ request('bulan') }}">
    </div>

    <div class="col-md-2 align-self-end">
        <button type="submit" class="btn btn-outline-primary w-100">🔎 Filter</button>
    </div>

    <div class="col-md-3 offset-md-1 align-self-end">
        <a href="{{ route('laporan.cetak', ['kelas_id' => request('kelas_id'), 'bulan' => request('bulan')]) }}" target="_blank" class="btn btn-cetak w-100">
            🖨️ Cetak PDF
        </a>
    </div>
</form>


            {{-- 🧮 Ringkasan total siswa per kelas --}}
            <div class="mb-3">
                @foreach ($rekapSiswaPerKelas as $kelas => $jumlah)
                    <span class="badge-ringkasan">
                        <i class="bi bi-person-check-fill me-1"></i> {{ $kelas }}: {{ $jumlah }} siswa
                    </span>
                @endforeach
            </div>

            {{-- ✅ Notifikasi --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- 📋 Tabel Pembayaran --}}
            <div class="table-responsive" data-aos="fade-up">
                <table class="table table-bordered table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Jumlah</th>
                            <th>Tanggal Bayar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pembayaran as $key => $row)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $row->siswa->nis ?? '-' }}</td>
                                <td class="text-start">{{ $row->siswa->nama ?? 'Tidak Ditemukan' }}</td>
                                <td>{{ $row->siswa->kelas->nama_kelas ?? '-' }}</td>
                                <td>Rp {{ number_format($row->jumlah, 0, ',', '.') }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->tanggal_bayar)->format('d-m-Y') }}</td>
                                <td><span class="badge bg-success">LUNAS</span></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-muted text-center">Belum ada data pembayaran.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- 💰 Total Jumlah --}}
            @if ($pembayaran->count())
                <div class="summary-box mt-3 text-end">
                    💰 <strong>Total Pembayaran:</strong> Rp {{ number_format($pembayaran->sum('jumlah'), 0, ',', '.') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
