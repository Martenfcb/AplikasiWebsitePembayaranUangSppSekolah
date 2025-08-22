@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Siswa</h2>
        <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
        <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
    </div>
@endsection
