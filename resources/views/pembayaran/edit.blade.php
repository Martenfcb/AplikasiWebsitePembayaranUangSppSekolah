@extends('layouts.app')

@section('title', 'Edit Pembayaran')

@section('content_header')
    <h1>Edit Pembayaran</h1>
@stop

@section('content')
    <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" value="{{ $pembayaran->nama_siswa }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $pembayaran->jumlah }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Bayar</label>
            <input type="date" name="tanggal_bayar" value="{{ $pembayaran->tanggal_bayar }}" class="form-control" required>
        </div>
        <button class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
@stop
