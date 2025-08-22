{{-- resources/views/pengawas/dashboard.blade.php --}}
@extends('layouts.master')

@section('title', 'Dashboard Pengawas')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    .dashboard-card {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        text-align: center;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
    }

    .time-box {
        font-size: 2rem;
        font-weight: bold;
    }

    .date-box {
        font-size: 1.2rem;
        margin-bottom: 20px;
        color: #f0f0f0;
    }
</style>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="dashboard-card">
                <h1 class="mb-3"><i class="bi bi-person-badge"></i> Selamat Datang, Pengawas!</h1>
                <p class="lead">Ini adalah halaman dashboard untuk pengawas. Anda dapat memantau aktivitas sistem di sini.</p>
                
                <div class="mt-4">
                    <div class="date-box" id="current-date">📅 Memuat tanggal...</div>
                    <div class="time-box" id="current-time">🕒 Memuat waktu...</div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript untuk Jam & Tanggal Otomatis --}}
<script>
    function updateDateTime() {
        const now = new Date();

        const tanggal = now.toLocaleDateString('id-ID', {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
        });

        const jam = now.toLocaleTimeString('id-ID', {
            hour: '2-digit', minute: '2-digit', second: '2-digit'
        });

        document.getElementById('current-date').textContent = `📅 ${tanggal}`;
        document.getElementById('current-time').textContent = `🕒 ${jam}`;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();
</script>
@endsection
