<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CobaController;
use App\http\Controllers\CreateNaskahController;
use App\http\Controllers\MahasiswaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/* Controller Coba */

Route::get('/coba', [CobaController::class, 'index']);

/* Controller Login */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('isLogin');

Route::get('/', [SessionController::class, 'index'])->middleware('isGuest');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isGuest');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/create', [SessionController::class, 'create'])->middleware('isGuest');


/* Controller Create Naskah */
Route::get('/buat_naskah', [CreateNaskahController::class, 'buat_naskah']);
Route::get('/riwayat', [CreateNaskahController::class, 'riwayat']);
Route::get('/suket_mhs_aktif', [CreateNaskahController::class, 'suket_mhs_aktif']);
Route::get('/suket_tunjangan', [CreateNaskahController::class, 'suket_tunjangan']);
Route::get('/surat_izin_kkn', [CreateNaskahController::class, 'surat_izin_kkn']);
Route::get('/surat_izin_magang', [CreateNaskahController::class, 'surat_izin_magang']);
Route::get('/surat_izin_penelitian', [CreateNaskahController::class, 'surat_izin_penelitian']);
Route::get('/surat_izin_observasi_matkul', [CreateNaskahController::class, 'surat_izin_observasi_matkul']);
Route::get('/surat_izin_observasi_TA', [CreateNaskahController::class, 'surat_izin_observasi_TA']);

/* Controller Mahasiswa */
Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'daftar_mahasiswa']);
Route::post('/daftar_mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/daftar_mahasiswa-detail/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
Route::get('/daftar_mahasiswa-edit', [MahasiswaController::class, 'edit']);

Route::view('/daftar_surat', 'daftar_surat');

Route::view('/user', 'user');

Route::view('/adminpages', 'adminpages');

Route::view('/content_form', 'contentform');

Route::view('/masukbaru', 'masukbaru');
Route::view('/tambah_daftar_mahasiswa', 'tambah_daftar_mahasiswa');

Route::view('/tambah_data', 'layouts.tambah_data');
Route::view('/daftar_tabel', 'layouts.daftar_table');

/*Route::get('/test-koneksi-database', function () {
    try {
        \DB::connection()->getPdo();

        echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'Belum terkoneksi database, error: ' . $e->getMessage();
    }
});*/
