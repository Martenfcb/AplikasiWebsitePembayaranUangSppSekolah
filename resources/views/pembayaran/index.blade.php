@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">📄 Data Pembayaran</h2>

    {{-- Tombol Tambah --}}
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">
        ➕ Tambah Pembayaran
    </a>

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            ✅ {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Tabel Data --}}
    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Jumlah</th>
                        <th>Tanggal Bayar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pembayaran as $row)
                        @php
                            $nominal = $row->siswa->spp->nominal ?? 0;
                            $status = $row->jumlah >= $nominal ? 'Lunas' : 'Belum Lunas';
                        @endphp
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->siswa->nis ?? '-' }}</td>
                            <td>{{ $row->siswa->nama ?? 'Nama tidak ditemukan' }}</td>
                            <td>{{ $row->siswa->kelas->nama_kelas ?? '-' }}</td>
                            <td>Rp {{ number_format($row->jumlah, 0, ',', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->tanggal_bayar)->format('d M Y') }}</td>
                            <td>
                                <span class="badge {{ $status == 'Lunas' ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ $status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('pembayaran.edit', $row->id) }}" class="btn btn-warning btn-sm me-1">
                                    ✏️ Edit
                                </a>

                                <form action="{{ route('pembayaran.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">🗑️ Hapus</button>
                                </form>

                                <a href="{{ route('pembayaran.cetakBukti', $row->id) }}" target="_blank" class="btn btn-info btn-sm">
                                 🖨️ Cetak
                                </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-3">📭 Belum ada data pembayaran.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
