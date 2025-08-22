@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Dashboard Admin</h1>
    <p>Selamat datang, <strong>{{ Auth::user()->name }}</strong>! Anda login sebagai <strong>Admin</strong>.</p>
    {{-- Tambahkan konten khusus admin di sini --}}
</div>
@endsection
