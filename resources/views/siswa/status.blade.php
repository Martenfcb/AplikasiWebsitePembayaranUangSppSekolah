@foreach($pembayaran as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->bulan }}</td>
    <td>{{ $item->tanggal_bayar }}</td>
    <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
    <td>{{ $item->status }}</td>
    <td>
        <a href="{{ route('pembayaran.cetak', $item->id) }}" class="btn btn-sm btn-primary" target="_blank">
            Cetak Bukti
        </a>
    </td>
</tr>
@endforeach
