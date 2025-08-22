@extends('layouts.app')

@section('content')
    <h3>Riwayat Pembayaran</h3>
    @if($riwayat->isEmpty())
        <p>Belum ada pembayaran.</p>
    @else
        <ul>
            @foreach($riwayat as $item)
                <li>{{ $item->tanggal_pembayaran }} - {{ $item->jumlah }}</li>
            @endforeach
        </ul>
    @endif
@endsection
