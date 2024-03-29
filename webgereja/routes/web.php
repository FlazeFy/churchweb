<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BadanPengurusController;
use App\Http\Controllers\ForgetPassController;
use App\Http\Controllers\JemaatController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RancanganProgramController;
use App\Http\Controllers\RenunganController;
use App\Http\Controllers\DetailRenunganController;
use App\Http\Controllers\SejarahGerejaController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\WartaJemaatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
    Route::post('/tambahtataibadah', [LandingController::class, 'tambahtataibadah']);
    Route::post('/hapustataibadah/{id}', [LandingController::class, 'hapustataibadah']);
    Route::post('/ubahtataibadah/{id}', [LandingController::class, 'ubahtataibadah']);
});

Route::prefix('/rancangan')->group(function () {
    Route::get('/', [RancanganProgramController::class, 'index']);
});
Route::prefix('/renungan')->group(function () {
    Route::get('/', [RenunganController::class, 'index']);
    Route::post('/tambah', [RenunganController::class, 'tambah']);

    Route::get('/{slug}', [DetailRenunganController::class, 'index']);
});
Route::prefix('/kegiatan')->group(function () {
    Route::get('/', [KegiatanController::class, 'index']);
    Route::post('/filter_tipe', [KegiatanController::class, 'filter_tipe_kegiatan']);
});

Route::prefix('/jemaat')->group(function () {
    Route::get('/', [JemaatController::class, 'index']);
    Route::post('/tambah', [JemaatController::class, 'tambah']);
    Route::post('/ubah/{id}', [JemaatController::class, 'ubah']);
    Route::post('/hapus/{id}', [JemaatController::class, 'hapus']);
});
Route::prefix('/warta')->group(function () {
    Route::get('/', [WartaJemaatController::class, 'index']);
});
Route::prefix('/keuangan')->group(function () {
    Route::get('/', [KeuanganController::class, 'index']);
    Route::post('/hapus/{id}', [KeuanganController::class, 'hapus']);
    Route::post('/ubah/{id}', [KeuanganController::class, 'ubah']);
    Route::post('/tambah', [KeuanganController::class, 'tambah']);
});
Route::prefix('/statistik')->group(function () {
    Route::get('/', [StatistikController::class, 'index']);
});

Route::prefix('/sejarah')->group(function () {
    Route::get('/', [SejarahGerejaController::class, 'index']);
});
Route::prefix('/struktur')->group(function () {
    Route::get('/', [StrukturOrganisasiController::class, 'index']);
    Route::post('/tambahgrupjabatan/{type}', [StrukturOrganisasiController::class, 'tambahgrupjabatan']);
    Route::post('/tambahpengurusutama', [StrukturOrganisasiController::class, 'tambahpengurusutama']);
    Route::post('/hapuspengurusutama/{id}', [StrukturOrganisasiController::class, 'hapuspengurusutama']);
});
Route::prefix('/badanpengurus')->group(function () {
    Route::get('/', [BadanPengurusController::class, 'index']);
    Route::post('/tambah', [BadanPengurusController::class, 'tambah']);
    Route::post('/hapus/{id}', [BadanPengurusController::class, 'hapus']);
    Route::post('/ubah/{id}', [BadanPengurusController::class, 'ubah']);
});

Route::prefix('/login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/check', [LoginController::class, 'login']);
    Route::post('/signout', [LoginController::class, 'signout']);
});
Route::prefix('/lupapassword')->group(function () {
    Route::get('/', [ForgetPassController::class, 'index']);
});











