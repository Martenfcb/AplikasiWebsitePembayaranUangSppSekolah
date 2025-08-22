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
                <h4 class="mb-4 text-warning fw-bold text-center">✏️ Edit Data SPP</h4>

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

                <form action="{{ route('spp.update', $spp->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" name="tahun" id="tahun" class="form-control"
                            value="{{ old('tahun', $spp->tahun) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nominal" class="form-label">Nominal</label>
                        <input type="number" name="nominal" id="nominal" class="form-control"
                            value="{{ old('nominal', $spp->nominal) }}" required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary shadow-sm">
                            <i class="bi bi-arrow-repeat"></i> Update
                        </button>
                        <a href="{{ route('spp.index') }}" class="btn btn-secondary ms-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
