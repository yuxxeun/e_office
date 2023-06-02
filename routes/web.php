<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\DaftarSurat;
use App\Http\Controllers\DaftarSuratController;
use App\Http\Controllers\DashboardController;
use App\http\Controllers\MahasiswaController;
use App\Http\Controllers\NaskahController;
use App\http\Controllers\WordController;

/* Controller Coba */
Route::get('/coba', [CobaController::class, 'index']);

/* Controller Login */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('isLogin');

// Auth Controller
Route::get('/', [SessionController::class, 'index'])->middleware('isGuest');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('isGuest');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/create', [SessionController::class, 'create'])->middleware('isGuest');


/* Route Naskah */
Route::controller(NaskahController::class)
    ->middleware(['auth'])
    ->prefix('naskah')
    ->group(function() {
        Route::get('/', 'naskah')->name('naskah.index');
        Route::get('/suket_mhs_aktif', 'suket_mhs_aktif')->name('naskah.mhsaktif');
        Route::get('/suket_tunjangan', 'suket_tunjangan')->name('naskah.tunjangan');
        Route::get('/surat_izin_kkn', 'surat_izin_kkn')->name('naskah.kkn');
        Route::get('/surat_izin_magang', 'surat_izin_magang')->name('naskah.magang');
        Route::get('/surat_izin_penelitian', 'surat_izin_penelitian')->name('naskah.penelitian');
        Route::get('/surat_izin_observasi_matkul', 'surat_izin_observasi_matkul')->name('naskah.observasimatkul');
        Route::get('/surat_izin_observasi_TA', 'surat_izin_observasi_TA')->name('naskah.observasi');
});

// Route Mahasiswa
Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function() {
    Route::get('/', 'index')->name('mahasiswa.index');
    Route::get('/tambah', 'create')->name('mahasiswa.create');
    Route::post('/tambah', 'store')->name('mahasiswa.store');
    Route::get('/detail/{id}', 'show')->name('mahasiswa.show');
    Route::get('/edit/{id}', 'edit')->name('mahasiswa.edit');
    Route::put('/edit/{id}', 'update')->name('mahasiswa.update');
    Route::delete('/hapus/{id}', 'destroy')->name('mahasiswa.delete');
});

Route::get('dashboard', [DashboardController::class, 'daftar_user']);

Route::controller(DaftarSuratController::class)->prefix('daftar-surat')->group(function() {
    Route::get('/', 'index')->name('surat.index');    
});

/* Controller Mahasiswa */

// Controller Surat
Route::view('/daftar_surat', 'daftar_surat');


Route::view('/user', 'user');
Route::view('/adminpages', 'adminpages');
Route::view('/content_form', 'contentform');
Route::view('/masukbaru', 'masukbaru');
Route::view('/tambah_daftar_mahasiswa', 'tambah_daftar_mahasiswa');
Route::view('/tambah_data', 'layouts.tambah_data');
Route::view('/daftar_tabel', 'layouts.daftar_table');
Route::get('/word', function () {
    return view('word');
});
Route::post('/word', [WordController::class, 'tes'])->name('word.tes');

/*Route::get('/test-koneksi-database', function () {
    try {
        \DB::connection()->getPdo();

        echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'Belum terkoneksi database, error: ' . $e->getMessage();
    }
});*/