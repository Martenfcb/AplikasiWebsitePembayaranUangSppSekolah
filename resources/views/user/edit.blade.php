@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 fw-bold">✏️ Edit Pengguna</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password (biarkan kosong jika tidak diubah)</label>
            <input type="password" name="password" class="form-control" placeholder="Password baru (opsional)">
        </div>

        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="role" class="form-select" required>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="pengawas" {{ $user->role == 'pengawas' ? 'selected' : '' }}>Pengawas</option>
                <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}>Siswa</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">💾 Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">↩️ Kembali</a>
    </form>
</div>
@endsection
