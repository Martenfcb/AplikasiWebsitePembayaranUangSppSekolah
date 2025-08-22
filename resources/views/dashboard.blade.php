@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-title', 'Selamat Datang di Dashboard')

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $totalSiswa }}</h3>
        <p>Total Siswa</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-graduate"></i>
      </div>
      <a href="{{ route('siswa.index') }}" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- tamb<!-- Total Transaksi -->
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $totalTransaksi }}</h3>
        <p>Total Transaksi</p>
      </div>
      <div class="icon">
        <i class="fas fa-money-bill-wave"></i>
      </div>
      <a href="{{ route('pembayaran.index') }}" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <!-- Laporan Bulan Ini -->
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $totalLaporan }}</h3>
        <p>Laporan </p>
      </div>
      <div class="icon">
        <i class="fas fa-file-alt"></i>
      </div>
      <a href="{{ route('laporan.index') }}" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <!-- Total User -->
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $totalUser }}</h3>
        <p>Total User</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="{{ route('user.index') }}" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
</div>
@endsection
