@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-primary fw-bold">✏️ Edit Data Siswa</h1>

    {{-- Notifikasi error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Edit Siswa --}}
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="card p-4 shadow rounded">
        @csrf
        @method('PUT')

        {{-- Nama --}}
        <div class="form-group mb-3">
            <label for="nama" class="form-label">👤 Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control"
                   value="{{ old('nama', $siswa->nama) }}" required>
        </div>

        {{-- NIS --}}
        <div class="form-group mb-3">
            <label for="nis" class="form-label">🆔 NIS</label>
            <input type="text" name="nis" id="nis" class="form-control"
                   value="{{ old('nis', $siswa->nis) }}" required>
        </div>

        {{-- Jenis Kelamin --}}
        <div class="form-group mb-3">
            <label for="jenis_kelamin" class="form-label">🚻 Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $siswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        {{-- Tempat Lahir --}}
        <div class="form-group mb-3">
            <label for="tempat_lahir" class="form-label">📍 Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                   value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" required>
        </div>

        {{-- Tanggal Lahir --}}
        <div class="form-group mb-3">
            <label for="tanggal_lahir" class="form-label">📅 Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                   value="{{ old('tanggal_lahir', $siswa->tanggal_lahir) }}" required>
        </div>

        {{-- NIK --}}
        <div class="form-group mb-3">
            <label for="nik" class="form-label">🆔 NIK</label>
            <input type="text" name="nik" id="nik" class="form-control"
                   value="{{ old('nik', $siswa->nik) }}">
        </div>

        {{-- Agama --}}
        <div class="form-group mb-3">
            <label for="agama" class="form-label">🛐 Agama</label>
            <select name="agama" id="agama" class="form-control" required>
                <option value="">-- Pilih Agama --</option>
                @foreach(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'] as $agama)
                    <option value="{{ $agama }}" {{ old('agama', $siswa->agama) == $agama ? 'selected' : '' }}>{{ $agama }}</option>
                @endforeach
            </select>
        </div>

        {{-- Alamat --}}
        <div class="form-group mb-3">
            <label for="alamat" class="form-label">🏠 Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat', $siswa->alamat) }}</textarea>
        </div>

        {{-- Kelas --}}
        <div class="form-group mb-3">
            <label for="kelas_id" class="form-label">🏫 Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}" {{ old('kelas_id', $siswa->kelas_id) == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- SPP --}}
        <div class="form-group mb-4">
            <label for="spp_id" class="form-label">💳 SPP</label>
            <select name="spp_id" id="spp_id" class="form-control" required>
                <option value="">-- Pilih SPP --</option>
                @foreach($spp as $s)
                    <option value="{{ $s->id }}" {{ old('spp_id', $siswa->spp_id) == $s->id ? 'selected' : '' }}>
                        Tahun {{ $s->tahun }} - Rp{{ number_format($s->nominal, 0, ',', '.') }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tombol Aksi --}}
        <div class="d-flex justify-content-between">
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                ⬅️ Kembali
            </a>
            <button type="submit" class="btn btn-success">
                💾 Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
