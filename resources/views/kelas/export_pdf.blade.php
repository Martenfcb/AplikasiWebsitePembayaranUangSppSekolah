<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 6px; text-align: center; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Data Kelas</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>{{ $item->wali_kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
