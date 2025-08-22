@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary">📘 Detail Kelas: {{ $kelas->nama_kelas }}</h4>
        <div>
            <a href="{{ route('kelas.exportPdf', $kelas->id) }}" class="btn btn-danger btn-sm">
                <i class="bi bi-file-earmark-pdf"></i> Export PDF
            </a>
            <a href="{{ route('kelas.exportExcelAll') }}" class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-excel"></i> Export Excel
            </a>
        </div>
    </div>

    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control shadow-sm" placeholder="🔍 Cari nama siswa...">
    </div>

    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <h6 class="text-muted mb-3">📊 Jumlah Siswa: <strong>{{ count($kelas->siswa) }}</strong></h6>

            <div class="table-responsive">
                <table class="table table-striped align-middle table-hover" id="siswaTable">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas->siswa as $index => $siswa)
                            <tr class="siswa-row">
                                <td>{{ $index + 1 }}</td>
                                <td class="nama">{{ $siswa->nama }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->email }}</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (count($kelas->siswa) === 0)
                    <p class="text-muted text-center mt-3">Belum ada data siswa di kelas ini.</p>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Live Search + Animasi --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const rows = document.querySelectorAll('.siswa-row');

        searchInput.addEventListener('keyup', function () {
            const keyword = this.value.toLowerCase();

            rows.forEach(row => {
                const nama = row.querySelector('.nama').textContent.toLowerCase();
                if (nama.includes(keyword)) {
                    row.style.display = '';
                    row.classList.add('animate__animated', 'animate__fadeIn');
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

{{-- Animasi CSS (gunakan animate.css CDN) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
