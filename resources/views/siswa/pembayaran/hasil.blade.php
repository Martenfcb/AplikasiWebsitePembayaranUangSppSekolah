@extends('layouts.app')

@section('page-title', 'Hasil Pembayaran')

@section('content')
<div class="container">
    <h4>Hasil Pembayaran untuk: {{ $siswa->nama }} (NIS: {{ $siswa->nis }})</h4>

    @if($pembayaran->isEmpty())
        <div class="alert alert-warning mt-3">Belum ada data pembayaran untuk siswa ini.</div>
    @else
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Jumlah Bayar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayaran as $key => $data)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->bulan }}</td>
                        <td>Rp {{ number_format($data->jumlah_bayar, 0, ',', '.') }}</td>
                        <td>{{ $data->status ?? 'Lunas' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('siswa.pembayaran') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
