{{-- filepath: c:\laragon\www\sumbangan_komite\resources\views\dashboard\pengawas.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Pengawas</h1>
    <p>Selamat datang, {{ Auth::user()->name }}! Anda login sebagai <strong>Pengawas</strong>.</p>
    <div class="card mt-4">
        <div class="card-header">
            Informasi Terkini
        </div>
        <div class="card-body">
            <ul>
                <li>Monitoring pembayaran komite siswa</li>
                <li>Melihat laporan pembayaran</li>
                <li>Mengelola data siswa dan kelas</li>
            </ul>
        </div>
    </div>
</div>
@endsection