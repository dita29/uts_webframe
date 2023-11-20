<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\DatamahasiswaController;
use App\Models\Datamahasiswa;
use App\Models\Detail;
use App\Models\Krs;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mahasiswa');
});

Route::get('/viewkrs', [KRSController::class, 'index']);

Route::get('/datamahasiswa', [DataMahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/datamahasiswa/{nim}/krs', [DataMahasiswaController::class, 'showKrs'])->name('mahasiswa.krs');

Route::prefix('mahasiswa')->group(function () {
    // Route untuk halaman admin/users tanpa menggunakan controller
    Route::get('/pendaftaran', function () {
        return "Ini adalah halaman pendaftaran"; // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    Route::get('/ujian', function () {
        return "Ini adalah halaman ujian"; // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    Route::get('/nilai', function () {
        return "Ini adalah halaman nilai"; // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    // Tambahkan rute lainnya yang mungkin Anda butuhkan di sini
});




// Route::prefix('mahasiswa')->group(function () {
   
//     Route::get('/pendaftaran', function () {
//         return view("pendaftaran"); 
//     })->name('home');
//     Route::get('/ujian', function () {
//         return view("ujian"); 
//     })->name('home');
//     Route::get('/nilai', function () {
//         return view("nilai"); 
//     })->name('home');
//     Route::get('/viewkrs', function () {
//         return view("viewkrs"); 
//     })->name('home');
   
// });


//Jawaban Soal 1