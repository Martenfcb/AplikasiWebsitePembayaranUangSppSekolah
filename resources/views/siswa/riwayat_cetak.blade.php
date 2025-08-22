<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pembayaran</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Riwayat Pembayaran Siswa</h2>
    <p>Nama: {{ $siswa }}</p>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayaran as $p)
                <tr>
                    <td>{{ $p->tanggal_bayar }}</td>
                    <td>Rp {{ number_format($p->jumlah, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
