@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary mb-3 mb-md-0">📚 Data Siswa</h4>
        <div class="input-group w-100 w-md-auto">
            <input type="text" id="searchInput" class="form-control" placeholder="🔍 Cari siswa...">
        </div>
    </div>

    {{-- Tombol Aksi --}}
    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah
        </a>
        <button class="btn btn-success" onclick="exportExcel()">
            <i class="bi bi-file-earmark-excel"></i> Excel
        </button>
        <button class="btn btn-danger" onclick="exportPDF()">
            <i class="bi bi-file-earmark-pdf"></i> PDF
        </button>
        <button class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#importModal">
            <i class="bi bi-upload"></i> Impor Excel
        </button>
    </div>

   {{-- Flash Messages --}}
@foreach (['success' => 'success', 'warning' => 'warning', 'error' => 'danger'] as $key => $type)
    @if(session($key))
        <div class="alert alert-{{ $type }} alert-dismissible fade show mt-2" role="alert">
            {{ session($key) }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endforeach

    {{-- Tabel --}}
    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle text-center shadow-sm" id="siswaTable">
            <thead class="table-primary">
                <tr class="align-middle">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>NIK</th>
                    <th>JK</th>
                    <th>TTL</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>SPP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $item->nama }}</strong></td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nik ?? '-' }}</td>
                    <td>
                        <span class="badge bg-{{ $item->jenis_kelamin === 'Laki-laki' ? 'primary' : 'pink' }}">
                            {{ $item->jenis_kelamin }}
                        </span>
                    </td>
                    <td>
                        {{ $item->tempat_lahir ?? '-' }},
                        <br>
                        <small class="text-muted">
                            {{ $item->tanggal_lahir ? \Carbon\Carbon::parse($item->tanggal_lahir)->format('d M Y') : '-' }}
                        </small>
                    </td>
                    <td>{{ $item->agama ?? '-' }}</td>
                    <td>
                        <div class="text-start text-wrap" style="max-width: 180px;">{{ $item->alamat ?? '-' }}</div>
                    </td>
                    <td>{{ $item->kelas->nama_kelas ?? '-' }}</td>
                    <td>
                        @if($item->spp)
                            <span class="badge bg-success">
                                {{ $item->spp->tahun }}
                            </span><br>
                            <small>Rp{{ number_format($item->spp->nominal, 0, ',', '.') }}</small>
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

                @if($siswa->isEmpty())
                <tr>
                    <td colspan="11" class="text-center text-muted">Tidak ada data siswa.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
<!-- Modal Impor Excel -->
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- FORM harus di dalam modal-content -->
      <form action="{{ route('siswa.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="importModalLabel">📥 Impor Data Excel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <label for="fileInput" class="form-label">Pilih file Excel (.xlsx, .xls)</label>
          <input type="file" name="file" class="form-control" id="fileInput" accept=".xlsx,.xls" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            <i class="bi bi-upload"></i> Impor
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('scripts')
<script>
    // Live Search
    document.getElementById('searchInput').addEventListener('input', function () {
        let filter = this.value.toLowerCase();
        document.querySelectorAll('#siswaTable tbody tr').forEach(row => {
            let match = [...row.children].some(td => td.textContent.toLowerCase().includes(filter));
            row.style.display = match ? '' : 'none';
        });
    });

    // Export Actions
    function exportExcel() {
        window.location.href = "{{ route('siswa.export.excel') }}";
    }

    function exportPDF() {
        window.location.href = "{{ route('siswa.export.pdf') }}";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
