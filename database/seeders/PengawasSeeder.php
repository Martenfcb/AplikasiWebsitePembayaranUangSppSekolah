<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PengawasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Pengawas Utama',
            'email' => 'pengawas@example.com',
            'password' => Hash::make('password123'),
            'role' => 'pengawas',
        ]);
    }
}
