<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{
    public static $errorMessage = null;

    public function model(array $row)
    {
        $requiredKeys = [
            'nama', 'nis', 'nik', 'jenis_kelamin', 'tempat_lahir',
            'tanggal_lahir', 'agama', 'alamat', 'kelas_id', 'spp_id'
        ];

        foreach ($requiredKeys as $key) {
            if (!array_key_exists($key, $row)) {
                self::$errorMessage = "Format file Excel tidak sesuai. Pastikan kolom: " . implode(', ', $requiredKeys);
                return null; // skip row
            }
        }

        return new Siswa([
            'nama'           => $row['nama'],
            'nis'            => $row['nis'],
            'nik'            => $row['nik'],
            'jenis_kelamin'  => $row['jenis_kelamin'],
            'tempat_lahir'   => $row['tempat_lahir'],
            'tanggal_lahir'  => $row['tanggal_lahir'],
            'agama'          => $row['agama'],
            'alamat'         => $row['alamat'],
            'kelas_id'       => $row['kelas_id'],
            'spp_id'         => $row['spp_id'],
        ]);
    }
}
