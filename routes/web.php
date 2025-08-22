<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengawasController;
use App\Exports\KelasExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Siswa\SiswaPembayaranController;


// Halaman awal redirect ke login
Route::get('/', function () {
    return redirect()->route('login');
});


// Route pendaftaran (tanpa redirect ke login)
Route::get('/register', function () {
    return view('auth.registrasi');
})->name('register');


// Auth routes dari Laravel Breeze
require __DIR__.'/auth.php';
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Route setelah login & verifikasi
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard utama (bisa redirect sesuai role)
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Atau redirect berdasarkan role
    })->name('dashboard');

    // Route dashboard per-role
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');
    Route::get('/dashboard/pengawas', [PengawasController::class, 'index'])->name('dashboard.pengawas');
    Route::get('/dashboard/siswa', [SiswaController::class, 'dashboard'])->name('dashboard.siswa'); // <--- Tambahkan method dashboard di controller

    // Route khusus siswa
 
Route::middleware(['auth'])->prefix('siswa')->name('siswa.')->group(function () {
    Route::get('/pembayaran', [SiswaPembayaranController::class, 'index'])->name('pembayaran');
    Route::get('/riwayat', [SiswaPembayaranController::class, 'riwayat'])->name('riwayat');

    // ✅ Tambahkan route untuk pengecekan berdasarkan NIS
    Route::post('/pembayaran/cek', [SiswaPembayaranController::class, 'cekPembayaran'])->name('pembayaran.cek');
});
    // Data SPP
    Route::resource('spp', SppController::class);

    Route::get('/pembayaran/cetak/{id}', [PembayaranController::class, 'cetakBukti'])->name('pembayaran.cetakBukti');


    // Data Siswa
    Route::resource('siswa', SiswaController::class);
    Route::get('/siswa/export/excel', [SiswaController::class, 'exportExcel'])->name('siswa.export.excel');
Route::get('/siswa/export/pdf', [SiswaController::class, 'exportPDF'])->name('siswa.export.pdf');
Route::post('/siswa/import', [SiswaController::class, 'import'])->name('siswa.import');


    // Data Kelas
    Route::resource('kelas', KelasController::class);
    Route::post('/kelas/import', [KelasController::class, 'import'])->name('kelas.import');
    Route::get('/kelas/export/excel', [KelasController::class, 'exportExcel'])->name('kelas.export.excel');
    Route::get('/kelas/export/pdf', [KelasController::class, 'exportPDF'])->name('kelas.export.pdf');
    Route::get('/kelas/{id}/export-pdf', [KelasController::class, 'exportPdf'])->name('kelas.exportPdf');
   

    // Pembayaran
    Route::resource('pembayaran', PembayaranController::class);
    Route::get('/pembayaran/cetak/{id}', [PembayaranController::class, 'cetakBukti'])->name('pembayaran.cetakBukti');
    Route::get('/api/cari-siswa', [PembayaranController::class, 'cariSiswa']);

    // Laporan
    Route::get('/laporan', [PembayaranController::class, 'laporan'])->name('laporan.index');
    Route::get('/laporan/cetak', [PembayaranController::class, 'cetakPDF'])->name('laporan.cetak');

    // Manajemen User
    Route::resource('user', UserController::class);
    Route::resource('users', UserController::class); // ini redundan, cukup pilih salah satu
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
});




