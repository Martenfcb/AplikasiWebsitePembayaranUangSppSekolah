@extends('layouts.app')

@section('content')
<style>
    .card-custom {
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .card-custom:hover {
        transform: translateY(-5px);
    }

    .table thead th {
        background-color: #007bff;
        color: white;
        vertical-align: middle;
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    .fade-in {
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    #searchInput {
        max-width: 300px;
        border-radius: 10px;
    }
</style>

<div class="container py-4 fade-in">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-2">
        <h4 class="fw-bold text-primary m-0">📄 Data SPP per Kelas</h4>
        <a href="{{ route('spp.create') }}" class="btn btn-success btn-sm shadow-sm">
            <i class="bi bi-plus-circle"></i> Tambah Data SPP
        </a>
    </div>

    {{-- Flash Message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show fade-in" role="alert" id="alertMessage">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Search Input --}}
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control shadow-sm" placeholder="🔍 Cari Tahun, Nominal, atau Kelas...">
    </div>

    <div class="card card-custom p-3 fade-in">
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center" id="sppTable">
                <thead>
                    <tr>
                        <th scope="col">Nomor</th>
                        <!-- <th scope="col">Kelas</th> -->
                        <th scope="col">Tahun</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($spp as $index => $item)
                        <tr class="fade-in">
                            <td>{{ $index + 1 }}</td>
                            <!-- <td class="kelas">{{ $item->kelas->nama_kelas ?? '-' }}</td> -->
                            <td class="tahun">{{ $item->tahun }}</td>
                            <td class="nominal" data-nominal="{{ $item->nominal }}">Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('spp.edit', $item->id) }}" class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('spp.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-muted text-center py-3">📭 Data SPP belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Auto-hide alert + Search Filter --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const alertMsg = document.getElementById('alertMessage');
        if (alertMsg) {
            setTimeout(() => {
                alertMsg.classList.add('fade');
                setTimeout(() => alertMsg.remove(), 600);
            }, 3000);
        }

        const searchInput = document.getElementById("searchInput");
        const tableRows = document.querySelectorAll("#sppTable tbody tr");

        searchInput.addEventListener("keyup", function () {
            const keyword = this.value.toLowerCase();
            tableRows.forEach(function (row) {
                const tahun = row.querySelector(".tahun")?.textContent.toLowerCase() || '';
                const nominal = row.querySelector(".nominal")?.textContent.toLowerCase() || '';
                const kelas = row.querySelector(".kelas")?.textContent.toLowerCase() || '';
                const match = tahun.includes(keyword) || nominal.includes(keyword) || kelas.includes(keyword);
                row.style.display = match ? "" : "none";
            });
        });
    });
</script>
@endsection
