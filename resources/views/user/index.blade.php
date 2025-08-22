@extends('layouts.app')

@section('content')
<div class="container">

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h2 class="mb-4 fw-bold">👥 Data Pengguna</h2>

    <a href="{{ route('users.create') }}" class="btn btn-success mb-3">➕ Tambah Pengguna</a>

    {{-- Form pencarian --}}
    <form method="GET" action="{{ route('users.index') }}" class="d-flex mb-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama atau email..." class="form-control me-2">
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $i => $user)
            <tr>
                <td class="text-center">{{ $i + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center">
                    <span class="badge bg-primary text-uppercase">{{ $user->role }}</span>
                </td>
                <td class="text-center">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">🗑️ Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data pengguna.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
