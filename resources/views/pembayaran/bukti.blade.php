<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bukti Pembayaran</title>
    <style>
        body { font-family: sans-serif; }
        .text-center { text-align: center; }
        .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table th, .table td { border: 1px solid #000; padding: 10px; text-align: left; }
        .table th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 class="text-center">Bukti Pembayaran SPP</h2>
    <hr>
    <table class="table">
        <tr>
            <th>NIS</th>
            <td>{{ $data->nis }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $data->nama }}</td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td>{{ $data->kelas }}</td>
        </tr>
        <tr>
            <th>Tanggal Bayar</th>
            <td>{{ date('d-m-Y', strtotime($data->tanggal_bayar)) }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>Rp {{ number_format($data->jumlah, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $data->keterangan ?? 'Lunas' }}</td>
        </tr>
    </table>

    <p style="margin-top: 30px;">Ttd,</p>
    <p style="margin-top: 60px;">____________________</p>
</body>
</html>
