@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Data Kelas</h4>

    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_kelas">Nama Kelas:</label>
            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control"
                   value="{{ old('nama_kelas', $kelas->nama_kelas) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="wali_kelas">Wali Kelas:</label>
            <input type="text" name="wali_kelas" id="wali_kelas" class="form-control"
                   value="{{ old('wali_kelas', $kelas->wali_kelas) }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Update</button>
    </form>
</div>
@endsection
