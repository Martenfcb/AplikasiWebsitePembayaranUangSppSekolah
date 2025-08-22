@extends('layouts.app')

@section('page-title', 'Tambah Pembayaran')

@section('content')


<div class="card">
    <div class="card-body">
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <form action="{{ route('pembayaran.store') }}" method="POST">
            @csrf

            <!-- Nama / NIS Siswa (Auto Complete) -->
            <div class="form-group">
                <label for="siswa_search">Cari Siswa (NIS / Nama)</label>
                <input type="text" id="siswa_search" class="form-control" placeholder="Ketik NIS atau Nama..." autocomplete="off" required>
                <input type="hidden" name="siswa_id" id="siswa_id">
                <div id="siswa_list" class="list-group mt-1 position-absolute w-100" style="z-index: 99;"></div>
            </div>

            <!-- Data Tampil Otomatis -->
            <div id="siswa_info" class="mt-3" style="display:none;">
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" id="kelas" class="form-control" readonly>
                </div>

                <div class="form-group mt-2">
                    <label>Jumlah SPP</label>
                    <input type="text" id="jumlah_display" class="form-control" readonly>
                </div>

                <div class="form-group mt-2">
                    <label>Tanggal Bayar</label>
                    <input type="date" name="tanggal_bayar" class="form-control" required>
                </div>

                <input type="hidden" name="jumlah" id="jumlah">
            </div>

            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary mt-4">Kembali</a>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const siswaSearch = document.getElementById('siswa_search');
    const siswaList = document.getElementById('siswa_list');
    const siswaInfo = document.getElementById('siswa_info');

    siswaSearch.addEventListener('input', function () {
        const keyword = this.value;
        if (keyword.length < 2) {
            siswaList.innerHTML = '';
            return;
        }

        fetch(`/api/cari-siswa?q=${keyword}`)
            .then(response => response.json())
            .then(data => {
                siswaList.innerHTML = '';
                data.forEach(item => {
                    const div = document.createElement('div');
                    div.classList.add('list-group-item', 'list-group-item-action');
                    div.textContent = `${item.nis} - ${item.nama}`;
                    div.dataset.id = item.id;
                    div.dataset.nama = item.nama;
                    div.dataset.nis = item.nis;
                    div.dataset.kelas = item.kelas;
                    div.dataset.nominal = item.nominal;

                    div.onclick = function () {
                        document.getElementById('siswa_search').value = `${item.nis} - ${item.nama}`;
                        document.getElementById('siswa_id').value = item.id;
                        document.getElementById('kelas').value = item.kelas;
                        document.getElementById('jumlah_display').value = `Rp ${parseInt(item.nominal).toLocaleString('id-ID')}`;
                        document.getElementById('jumlah').value = item.nominal;

                        siswaList.innerHTML = '';
                        siswaInfo.style.display = 'block';
                    };

                    siswaList.appendChild(div);
                });
            });
    });

    document.addEventListener('click', function (e) {
        if (!siswaList.contains(e.target) && e.target !== siswaSearch) {
            siswaList.innerHTML = '';
        }
    });
</script>
@endpush
