<?php

use App\Http\Controllers\DosenController;
use App\http\Controllers\MahasiswaController;
use App\Http\Controllers\NaskahController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SuketKknController;
use App\Http\Controllers\SuketMagangPklController;
use App\Http\Controllers\SuketMahasiswaAktifController;
use App\Http\Controllers\SuketObservasiMatkulController;
use App\Http\Controllers\SuketObservasiTugasAkhirController;
use App\Http\Controllers\SuketPenelitianTugasAkhirController;
use App\Http\Controllers\SuketTunjanganController;
use App\Http\Controllers\SuratController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

// Auth Controller
Route::get('/', [SessionController::class, 'index'])->name('login');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('sesi.login');
Route::get('/logout', [SessionController::class, 'logout'])->middleware(['auth'])->name('logout');
Route::get('/register', [SessionController::class, 'register']);
Route::post('/create', [SessionController::class, 'create']);

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Naskah route
Route::controller(NaskahController::class)
    ->middleware(['auth'])
    ->prefix('naskah')
    ->group(function () {
        Route::get('/', 'naskah')->name('naskah.index');
    });

// Mahasiswa route
Route::controller(MahasiswaController::class)
    ->middleware(['auth'])
    ->prefix('mahasiswa')
    ->group(function () {
        Route::get('/', 'index')->name('mahasiswa.index');
        Route::get('/tambah', 'create')->name('mahasiswa.create');
        Route::post('/tambah', 'store')->name('mahasiswa.store');
        Route::get('/detail/{id}', 'show')->name('mahasiswa.show');
        Route::get('/edit/{id}', 'edit')->name('mahasiswa.edit');
        Route::put('/edit/{id}', 'update')->name('mahasiswa.update');
        Route::delete('/hapus/{id}', 'destroy')->name('mahasiswa.delete');
        Route::get('pdf', 'exportpdf')->name('mahasiswa.pdf');
    });

// Buat surat controller
Route::controller(SuratController::class)
    ->middleware(['auth'])
    ->prefix('buat-surat')
    ->group(function () {
        Route::get('/', 'create')->name('buat-surat.create');
    });

// Route Suket Mahasiswa Aktif
    Route::controller(SuketMahasiswaAktifController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-mahasiswa-aktif', 'create')->name('suket.mahasiswaAktif');
        Route::post('/suket-mahasiswa-aktif', 'store')->name('suket.mahasiswaAktifStore');
    });

    Route::controller(SuketTunjanganController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-tunjangan', 'create')->name('suket.tunjangan');
        Route::post('/suket-tunjangan', 'store')->name('suket.tunjanganStore');
    });

    Route::controller(SuketKknController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-kkn', 'create')->name('suket.kkn');
        Route::post('/suket-kkn', 'store')->name('suket.kknStore');
    });

    Route::controller(SuketMagangPklController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-magang-pkl', 'create')->name('suket.magang');
        Route::post('/suket-magang-pkl', 'store')->name('suket.magangStore');
    });

    Route::controller(SuketPenelitianTugasAkhirController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-penelitian-tugas-akhir', 'create')->name('suket.penelitian');
        Route::post('/suket-penelitian-tugas-akhir', 'store')->name('suket.penelitianStore');
    });

    Route::controller(SuketObservasiMatkulController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-observasi-matkul', 'create')->name('suket.observasi');
        Route::post('/suket-observasi-matkul', 'store')->name('suket.observasiStore');
    });

    Route::controller(SuketObservasiTugasAkhirController::class)
    ->prefix('buat-surat')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/suket-observasi-tugas-akhir', 'create')->name('suket.ta');
        Route::post('/suket-observasi-tugas-akhir', 'store')->name('suket.taStore');
    });


Route::get('surat', [SuratController::class, 'index'])->name('surat.index');

// Riwayat route 
Route::controller(RiwayatController::class)->prefix('riwayat')->group(function () {
    Route::get('/', 'index')->name('riwayat.index');
});

// Dosen Route
Route::controller(DosenController::class)
    ->prefix('dosen')
    ->middleware(['auth'])
    ->group(function() {
        Route::get('/', 'index')->name('dosen.index');
        Route::get('/tambah', 'create')->name('dosen.create');
        Route::post('/tambah', 'store')->name('dosen.store');
        Route::get('/detail/{id}', 'show')->name('dosen.detail');
        Route::get('/edit/{id}', 'edit')->name('dosen.edit');
        Route::put('/edit/{id}', 'update')->name('dosen.update');
        Route::delete('/hapus/{id}', 'destroy')->name('dosen.delete');
    });

    // Prodi Route
    Route::controller(ProdiController::class)
    ->prefix('prodi')
    ->middleware(['auth'])
    ->group(function() {
        Route::get('/', 'index')->name('prodi.index');
        Route::get('/tambah', 'create')->name('prodi.create');
        Route::post('/tambah', 'store')->name('prodi.store');
        Route::get('/detail/{id}', 'show')->name('prodi.detail');
        Route::get('/edit/{id}', 'edit')->name('prodi.edit');
        Route::put('/edit/{id}', 'update')->name('prodi.update');
        Route::delete('/hapus/{id}', 'destroy')->name('prodi.delete');
    });

// Health route
Route::get('health', [HealthCheckResultsController::class, '__invoke']);

// Route for testing PDF view
Route::view('/pdf/mahasiswa', 'pdf.mahasiswa');
Route::view('/pdf/suket-mahasiswa-aktif', 'pdf.suketMahasiswaAktif'); 

Route::view('/adminpages', 'adminpages');
Route::view('/content_form', 'contentform');
Route::view('/masukbaru', 'masukbaru');
