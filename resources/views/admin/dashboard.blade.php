@extends('layouts.app')

@php
    use Illuminate\Support\Facades\DB;

    $totalSiswa = DB::table('siswa')->count();
    $totalKelas = DB::table('kelas')->count();
    $totalPembayaran = DB::table('pembayaran')->count();
    $totalSpp = DB::table('spp')->count();
    $totalUser = DB::table('users')->count();
    $totalLaporan = DB::table('laporans')->count();
@endphp

@section('content')
    <style>
        .small-box {
            border-radius: 1rem;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .small-box:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .small-box .icon {
            position: absolute;
            top: -10px;
            right: 10px;
            font-size: 4rem;
            opacity: 0.15;
            transition: transform 0.5s ease;
        }

        .small-box:hover .icon {
            transform: scale(1.2) rotate(15deg);
            opacity: 0.3;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .time-box {
            font-size: 1.2rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 10px;
        }

        .small-box-footer {
            background: rgba(0, 0, 0, 0.05);
            padding: 10px;
            color: #fff;
            font-weight: bold;
            display: block;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            text-decoration: none;
        }

        .small-box-footer:hover {
            background: rgba(255, 255, 255, 0.15);
            text-decoration: none;
        }
    </style>

    <!-- Header dan Jam -->
    <div class="dashboard-header">
        <h2 class="fw-bold">📊 Selamat Datang di Dashboard</h2>
        <div id="current-date" class="time-box">📅 Memuat tanggal...</div>
        <div id="current-time" class="time-box">🕒 Memuat waktu...</div>
    </div>

    <!-- Statistik Box -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="small-box bg-info text-white">
                <div class="inner">
                    <h3>{{ $totalSiswa }}</h3>
                    <p>Total Siswa</p>
                </div>
                <div class="icon"><i class="fas fa-user-graduate fa-bounce"></i></div>
                <a href="{{ route('siswa.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="small-box bg-success text-white">
                <div class="inner">
                    <h3>{{ $totalPembayaran }}</h3>
                    <p>Total Pembayaran</p>
                </div>
                <div class="icon"><i class="fas fa-money-bill-wave fa-beat"></i></div>
                <a href="{{ route('pembayaran.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="small-box bg-warning text-white">
                <div class="inner">
                    <h3>{{ $totalKelas }}</h3>
                    <p>Total Kelas</p>
                </div>
                <div class="icon"><i class="fas fa-chalkboard fa-shake"></i></div>
                <a href="{{ route('kelas.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="small-box bg-primary text-white">
                <div class="inner">
                    <h3>{{ $totalSpp }}</h3>
                    <p>Data SPP</p>
                </div>
                <div class="icon"><i class="fas fa-file-invoice-dollar fa-fade"></i></div>
                <a href="{{ route('spp.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="small-box bg-secondary text-white">
                <div class="inner">
                    <h3>{{ $totalUser }}</h3>
                    <p>Total Pengguna</p>
                </div>
                <div class="icon"><i class="fas fa-users fa-beat"></i></div>
                <a href="{{ route('user.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="small-box bg-danger text-white">
                <div class="inner">
                    <h3>{{ $totalLaporan }}</h3>
                    <p>Total Laporan</p>
                </div>
                <div class="icon"><i class="fas fa-chart-line fa-beat-fade"></i></div>
                <a href="{{ route('laporan.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div> -->
    </div>

    <!-- Chart -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card shadow-sm animate__animated animate__fadeInUp">
                <div class="card-header bg-gradient-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-chart-bar"></i> Grafik Statistik</h5>
                </div>
                <div class="card-body">
                    <canvas id="dashboardChart" height="110"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Jam & Grafik -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Jam & Tanggal
        function updateDateTime() {
            const now = new Date();
            const tanggal = now.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
            const jam = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });

            document.getElementById('current-date').textContent = `📅 ${tanggal}`;
            document.getElementById('current-time').textContent = `🕒 ${jam}`;
        }
        setInterval(updateDateTime, 1000); updateDateTime();

        // Grafik Statistik
        const ctx = document.getElementById('dashboardChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Siswa', 'Kelas', 'Pembayaran', 'SPP', 'User'],
                datasets: [{
                    label: 'Jumlah Data',
                    data: [
                        {{ $totalSiswa }},
                        {{ $totalKelas }},
                        {{ $totalPembayaran }},
                        {{ $totalSpp }},
                        {{ $totalUser }},
                    ],
                    backgroundColor: [
                        '#0d6efd', '#ffc107', '#198754', '#0dcaf0', '#6c757d', '#dc3545'
                    ],
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: context => `${context.label}: ${context.raw}`
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { precision: 0 }
                    }
                }
            }
        });
    </script>
@endsection
