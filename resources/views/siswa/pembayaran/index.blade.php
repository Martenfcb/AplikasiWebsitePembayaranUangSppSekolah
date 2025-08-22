@extends('layouts.app')

@section('page-title', 'Cek Status Pembayaran')

@section('content')
<style>
    .cek-container {
        max-width: 500px;
        margin: auto;
        background: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.8s ease-in-out;
    }

    .cek-container h4 {
        font-weight: 700;
        color: #0d6efd;
        margin-bottom: 25px;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
    }

    .form-control {
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 1rem;
        border: 1px solid #ced4da;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .btn-check-pembayaran {
        background: linear-gradient(to right, #0d6efd, #0061f2);
        color: white;
        font-weight: 600;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-check-pembayaran:hover {
        background: #084cdf;
    }

    .alert {
        border-radius: 8px;
        font-size: 0.95rem;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="container py-5">
    <div class="cek-container">
        <h4 class="text-center"><i class="bi bi-search"></i> Cek Status Pembayaran</h4>

        @if(session('error'))
            <div class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif

        <form action="{{ route('siswa.pembayaran.cek') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nis">Masukkan NIS:</label>
                <input type="text" name="nis" id="nis" class="form-control" placeholder="Contoh: 201011" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn-check-pembayaran">
                    <i class="bi bi-search"></i> Cek Pembayaran
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
