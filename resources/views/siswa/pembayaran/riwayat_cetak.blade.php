@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fw-bold text-info mb-4">📜 Riwayat Pembayaran</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-info">
            <tr>
                <th>No</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($riwayat as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->tanggal_bayar }}</td>
                    <td>Rp{{ number_format($data->jumlah, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada riwayat pembayaran</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
