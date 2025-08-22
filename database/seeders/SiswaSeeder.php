<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Siswa Satu',
            'email' => 'siswa1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        User::create([
            'name' => 'Siswa Dua',
            'email' => 'siswa2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);
    }
}
