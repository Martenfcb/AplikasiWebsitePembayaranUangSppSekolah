<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pembayaran SPP</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 30px;
            background-color: #fff;
            color: #333;
        }

        h2, h4 {
            text-align: center;
            margin: 0;
        }

        .school-info {
            text-align: center;
            margin-bottom: 10px;
        }

        hr {
            border: 2px solid #007BFF;
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            font-size: 14px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .footer {
            margin-top: 40px;
            font-size: 13px;
            text-align: right;
            color: #555;
        }

        .signature {
            margin-top: 60px;
            text-align: right;
        }

        .signature div {
            margin-right: 50px;
        }
    </style>
</head>
<body>

    <div class="school-info">
        <h2>LAPORAN PEMBAYARAN SPP</h2>
        <h4>SMKN 1 LINGGO SARI BAGANTI</h4>
        <small>Jl. Pendidikan No. 123, Sumatera Barat</small>
    </div>
    <hr>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Jumlah</th>
                <th>Tanggal Bayar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pembayaran as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->siswa->nis }}</td>
                    <td>{{ $p->siswa->nama }}</td>
                    <td>{{ $p->siswa->kelas->nama_kelas ?? '-' }}</td>
                    <td>Rp {{ number_format($p->jumlah, 0, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($p->tanggal_bayar)->format('d-m-Y') }}</td>
                    <td><span style="color: green; font-weight: bold;">LUNAS</span></td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Tidak ada data pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        Dicetak pada: {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i') }}
    </div>

    <div class="signature">
        <div>
            <p>Mengetahui,</p>
            <p><strong>Bendahara Sekolah</strong></p>
            <br><br>
            <p><u>______________________</u></p>
        </div>
    </div>

</body>
</html>
