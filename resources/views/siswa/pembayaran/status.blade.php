@extends('layouts.app')

@section('title', 'Status Pembayaran SPP')

@section('content')
<style>
    .status-header {
        background: linear-gradient(to right, #00c6ff, #0072ff);
        border-radius: 12px;
        padding: 30px 20px;
        color: white;
        margin-bottom: 30px;
        text-align: center;
        animation: fadeInDown 0.7s ease;
    }

    .status-header h2 {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .table-responsive {
        border-radius: 12px;
        overflow-x: auto;
    }

    table.table {
        border-radius: 12px;
        overflow: hidden;
    }

    table th,
    table td {
        vertical-align: middle;
        white-space: nowrap;
    }

    table thead th {
        position: sticky;
        top: 0;
        z-index: 1;
    }

    .badge {
        font-size: 0.85rem;
    }

    .btn-outline-primary {
        border-radius: 6px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #0d6efd;
        color: white;
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

    .no-data {
        background: #f1f1f1;
        padding: 40px 20px;
        border-radius: 12px;
        text-align: center;
        font-size: 1rem;
        color: #555;
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<div class="container py-4">
    <div class="status-header">
        <h2>📄 Status Pembayaran SPP</h2>
        <p class="mb-0">Berikut adalah riwayat pembayaran kamu</p>
    </div>

    @if ($pembayaran->isEmpty())
        <div class="no-data">
            <i class="bi bi-info-circle fs-3 mb-2 d-block"></i>
            Belum ada data pembayaran ditemukan.
        </div>
    @else
        <div class="card shadow-sm border-0">
            <div class="card-body table-responsive p-4">
                <table class="table table-hover align-middle text-center table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Tanggal Bayar</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $i => $data)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $data->siswa->nis ?? '-' }}</td>
                            <td>{{ $data->siswa->nama ?? '-' }}</td>
                            <td>{{ date('d M Y', strtotime($data->tanggal_bayar)) }}</td>
                            <td>Rp {{ number_format($data->jumlah, 0, ',', '.') }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $data->keterangan && trim($data->keterangan) !== '' ? $data->keterangan : 'Lunas' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('pembayaran.cetakBukti', $data->id) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-printer"></i> Cetak
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection
