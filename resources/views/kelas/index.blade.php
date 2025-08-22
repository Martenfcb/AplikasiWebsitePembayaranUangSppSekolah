@extends('layouts.app')

@section('content')
<style>
    .fade-in { animation: fadeIn 0.6s ease-in-out; }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .card-custom {
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }
    .card-custom:hover { transform: translateY(-5px); }
    .table thead { background-color: #0d6efd; color: white; }
    .btn:hover { transform: scale(1.03); }
</style>

<div class="container py-4 fade-in">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary">📚 Data Kelas</h3>
        <a href="{{ route('kelas.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle"></i> Tambah Kelas
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show fade-in" id="alertSuccess">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Statistik --}}
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <div class="card border-primary card-custom p-3">
                <h6 class="text-muted">Jumlah Kelas</h6>
                <h4 class="text-primary">{{ $kelas->count() }}</h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success card-custom p-3">
                <h6 class="text-muted">Jumlah Wali Kelas</h6>
                <h4 class="text-success">{{ $kelas->pluck('wali_kelas')->unique()->count() }}</h4>
            </div>
        </div>
    </div>

    {{-- Filter & Export --}}
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <input type="text" id="searchInput" class="form-control w-auto" placeholder="🔍 Cari kelas / wali..." style="max-width: 300px;">
        <div>
            <a href="{{ route('kelas.export.excel') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-file-earmark-excel"></i> Excel
            </a>
            <a href="{{ route('kelas.export.pdf') }}" class="btn btn-outline-danger shadow-sm">
                <i class="bi bi-file-earmark-pdf"></i> PDF
            </a>
        </div>
    </div>

    {{-- Tabel --}}
    <div class="card card-custom fade-in">
        <div class="card-body">
            @if ($kelas->count())
                <div class="table-responsive">
                    <table class="table table-hover text-center" id="kelasTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Wali Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td class="nama_kelas">{{ $item->nama_kelas }}</td>
                                    <td class="wali_kelas">{{ $item->wali_kelas }}</td>
                                    <td>
                                        <a href="{{ route('kelas.edit', $item->id) }}" class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center text-muted py-3">📭 Belum ada data kelas.</p>
            @endif
        </div>
    </div>
</div>

{{-- JavaScript --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const input = document.getElementById("searchInput");
        const rows = document.querySelectorAll("#kelasTable tbody tr");

        input.addEventListener("keyup", function () {
            const keyword = this.value.toLowerCase();
            rows.forEach(row => {
                const nama = row.querySelector(".nama_kelas")?.textContent.toLowerCase();
                const wali = row.querySelector(".wali_kelas")?.textContent.toLowerCase();
                row.style.display = (nama.includes(keyword) || wali.includes(keyword)) ? "" : "none";
            });
        });

        // Auto-hide alert
        const alert = document.getElementById('alertSuccess');
        if (alert) {
            setTimeout(() => {
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 600);
            }, 3000);
        }
    });
</script>
@endsection
