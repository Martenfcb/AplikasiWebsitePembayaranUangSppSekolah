@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">📜 Riwayat Pembayaran</h2>

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered text-center">
                <thead class="table-success">
                    <tr>
                        <th>ID</th>
                        <th>Jumlah</th>
                        <th>Tanggal Bayar</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($riwayat as $row)
                        @php
                            $nominal = $row->siswa->spp->nominal ?? 0;
                            $status = $row->jumlah >= $nominal ? 'Lunas' : 'Belum Lunas';
                        @endphp
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>Rp {{ number_format($row->jumlah, 0, ',', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->tanggal_bayar)->format('d M Y') }}</td>
                            <td>
                                <span class="badge {{ $status == 'Lunas' ? 'bg-success' : 'bg-warning text-dark' }}">{{ $status }}</span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted text-center">📭 Tidak ada riwayat pembayaran ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
