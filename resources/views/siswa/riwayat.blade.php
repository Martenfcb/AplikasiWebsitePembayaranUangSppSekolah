@extends('layouts.app')

@section('content')
<div class="container">
    <h3>🧾 Riwayat Pembayaran Anda</h3>

    <a href="{{ route('siswa.riwayat.cetak') }}" class="btn btn-primary mb-3">
        <i class="fas fa-print"></i> Cetak PDF
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pembayaran as $p)
                <tr>
                    <td>{{ $p->tanggal_bayar }}</td>
                    <td>Rp {{ number_format($p->jumlah, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Belum ada pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
