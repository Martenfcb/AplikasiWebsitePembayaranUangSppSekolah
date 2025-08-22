<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bukti Pembayaran SPP</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            color: #000;
            border: 1px dashed #999;
            position: relative;
            z-index: 1;
        }

        /* Dark Transparent Background Logo */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset('images/logo_smk.png') }}') no-repeat center center;
            background-size: 300px;
            opacity: 0.08; /* Semakin kecil, semakin gelap */
            z-index: 0;
        }

        .text-center {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .logo {
            width: 40px;
            height: auto;
            margin-bottom: 5px;
        }

        h2 {
            margin: 10px 0 0;
        }

        h4 {
            margin: 0;
            font-size: 14px;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 10px 0;
            position: relative;
            z-index: 1;
        }

        table {
            width: 100%;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 10px;
            position: relative;
            z-index: 1;
        }

        th, td {
            text-align: left;
            padding: 4px 0;
        }

        .amount {
            font-weight: bold;
            font-size: 16px;
        }

        .stamp {
            color: red;
            font-weight: bold;
            font-size: 24px;
            border: 2px solid red;
            padding: 8px 20px;
            display: inline-block;
            transform: rotate(-15deg);
            margin-top: 30px;
            border-radius: 5px;
            box-shadow: 0 0 5px red;
            background-color: #fff;
            position: relative;
            z-index: 1;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            position: relative;
            z-index: 1;
        }

        @media print {
            body {
                border: none;
                margin: 0;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <div class="text-center">
        <img src="{{ asset('images/logo_smk.png') }}" alt="Logo SMK" class="logo">
        <h2>Bukti Pembayaran SPP</h2>
        <h4>SMK Negeri 1 Batusangkar</h4>
        <small>{{ date('d-m-Y H:i:s') }}</small>
    </div>

    <div class="divider"></div>

    {{-- Info Pembayaran --}}
    <table>
        <tr>
            <th>NIS</th>
            <td>: {{ $data->nis }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>: {{ $data->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Bayar</th>
            <td>: {{ date('d-m-Y', strtotime($data->tanggal_bayar)) }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>: <span class="amount">Rp {{ number_format($data->jumlah, 0, ',', '.') }}</span></td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>: {{ $data->keterangan ?? 'Lunas' }}</td>
        </tr>
    </table>

    <div class="divider"></div>

    {{-- Stempel Modern --}}
    <div class="text-center">
        <div class="stamp">LUNAS</div>
    </div>

    {{-- Footer --}}
    <div class="footer">
        <p>Terima kasih telah melakukan pembayaran.</p>
        <p>Bukti ini sah tanpa tanda tangan.</p>
        <p class="no-print"><button onclick="window.print()">🖨️ Cetak</button></p>
    </div>

</body>
</html>
