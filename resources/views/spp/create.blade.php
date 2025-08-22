@extends('layouts.app')

@section('content')
<style>
    .form-card {
        background-color: #ffffff;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        animation: fadeIn 0.7s ease-in-out;
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 12px;
        padding: 12px;
        font-size: 15px;
    }

    .btn-primary {
        border-radius: 12px;
        padding: 10px 25px;
        transition: 0.3s;
    }

    .btn-primary:hover {
        transform: scale(1.05);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-card">
                <h4 class="mb-4 text-primary fw-bold text-center">➕ Tambah Data SPP</h4>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                {{-- Display Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Display Validation Errors --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('spp.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                      <input type="number" name="tahun" class="form-control" required placeholder="Contoh: 2025"
       min="2000" max="2100" value="{{ old('tahun') }}">

                    </div>

                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" name="nominal" class="form-control"
                               required placeholder="Contoh: 1500000" min="0">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary shadow-sm">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                        <a href="{{ route('spp.index') }}" class="btn btn-secondary ms-2">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
