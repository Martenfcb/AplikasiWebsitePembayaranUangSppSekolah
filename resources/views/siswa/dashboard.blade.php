@extends('layouts.app')

@section('page-title', 'Dashboard Siswa')

@section('content')
<!-- Custom CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .dashboard-header {
        background: linear-gradient(to right, #00c6ff, #0072ff);
        color: white;
        border-radius: 12px;
        padding: 30px 20px;
        margin-bottom: 30px;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        animation: fadeIn 1s ease-in-out;
    }

    .dashboard-header h2 {
        font-weight: 700;
        margin-bottom: 5px;
    }

    .time-box {
        font-size: 1.1rem;
        font-weight: 500;
        opacity: 0.9;
    }

    .info-panel {
        background: linear-gradient(135deg, #28a745, #218838);
        backdrop-filter: blur(10px);
        border-radius: 18px;
        padding: 24px;
        color: white;
        position: relative;
        overflow: hidden;
        min-height: 170px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: fadeInUp 0.8s ease forwards;
    }

    .info-panel:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .info-icon {
        font-size: 50px;
        opacity: 0.15;
        position: absolute;
        top: 20px;
        right: 20px;
    }

    .info-content h5 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .info-content p {
        font-size: 0.95rem;
        margin-bottom: 15px;
        opacity: 0.9;
    }

    .info-content a {
        text-decoration: none;
        background: white;
        color: #218838;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 600;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .info-content a:hover {
        background: #e2e6ea;
        color: #145c2d;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Dashboard Content -->
<div class="container py-4">
    <div class="dashboard-header text-center">
        <h2>👋 Selamat datang, {{ Auth::user()->name }}</h2>
        <div id="datetime" class="time-box"></div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row g-4">
        <!-- Panel: Status Pembayaran -->
        <div class="col-md-6 col-lg-4">
            <div class="info-panel">
                <div class="info-icon"><i class="bi bi-cash-coin"></i></div>
                <div class="info-content">
                    <h5>Status Pembayaran</h5>
                    <p>Lihat status pembayaran kamu secara lengkap dan terbaru.</p>
                    @if (Route::has('siswa.pembayaran'))
                        <a href="{{ route('siswa.pembayaran') }}">
                            <i class="bi bi-eye"></i> Lihat
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Tambahkan panel lainnya di sini -->
        {{-- <div class="col-md-6 col-lg-4"> ... </div> --}}
    </div>
</div>

<!-- JavaScript: Real-time Date & Time -->
<script>
    function updateTime() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const day = days[now.getDay()];
        const date = now.toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
        const time = now.toLocaleTimeString('id-ID', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('datetime').textContent = `${day}, ${date} - ${time}`;
    }

    setInterval(updateTime, 1000);
    updateTime();
</script>
@endsection
