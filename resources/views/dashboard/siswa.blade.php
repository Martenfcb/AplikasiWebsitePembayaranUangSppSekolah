{{-- filepath: c:\laragon\www\sumbangan_komite\resources\views\dashboard\siswa.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4 text-center">Dashboard Siswa</h1>
            <div class="alert alert-info">
                Selamat datang, <strong>{{ Auth::user()->name }} <strong>Siswa</strong>.
            </div>
            <div class="card shadow-sm">
            </div>
        </div>
    </div>
</div>
@endsection