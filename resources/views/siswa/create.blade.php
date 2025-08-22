@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Tambah Data Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        {{-- Nama --}}
        <div class="form-group mt-2">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>

        {{-- NIS --}}
       <div class="form-group mt-2">
    <label>NIS</label>
    <input type="text" name="nis" 
           class="form-control @error('nis') is-invalid @enderror" 
           value="{{ old('nis') }}" required>
    @error('nis')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


        {{-- Jenis Kelamin --}}
        <div class="form-group mt-2">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        {{-- Tempat Lahir --}}
        <div class="form-group mt-2">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir') }}" required>
        </div>

        {{-- Tanggal Lahir --}}
        <div class="form-group mt-2">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}" required>
        </div>

        {{-- NIK --}}
        <div class="form-group mt-2">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" value="{{ old('nik') }}">
        </div>

        {{-- Agama --}}
        <div class="form-group mt-2">
            <label>Agama</label>
            <select name="agama" class="form-control" required>
                <option value="">-- Pilih Agama --</option>
                @foreach(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'] as $agama)
                    <option value="{{ $agama }}" {{ old('agama') == $agama ? 'selected' : '' }}>{{ $agama }}</option>
                @endforeach
            </select>
        </div>

        {{-- Alamat --}}
        <div class="form-group mt-2">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
        </div>

        {{-- Pilih Kelas --}}
        <div class="form-group mt-2">
            <label>Kelas</label>
            <select name="kelas_id" class="form-control" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}" {{ old('kelas_id') == $k->id ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Pilih SPP --}}
        <div class="form-group mt-2">
            <label>SPP</label>
            <select name="spp_id" class="form-control" required>
                <option value="">-- Pilih SPP --</option>
                @foreach($spp as $s)
                    <option value="{{ $s->id }}" {{ old('spp_id') == $s->id ? 'selected' : '' }}>
                        Tahun {{ $s->tahun }} - Rp{{ number_format($s->nominal) }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Tombol --}}
        <div class="form-group mt-3">
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
