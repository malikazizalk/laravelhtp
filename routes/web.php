<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yg sudah di buat sebelumnya yg ada di file http/controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Pagi";
}); // ini adalah routing pemanggilan dirinya sendiri

Route::get('/ucapan', function () {
    return view('ucapan'); // ini adalah routing yang mengarahkan ke view yang ada di folder resource/views
});

Route::get('/nilai', function(){
    return view('nilai');
}); // arahkan return nilai ke file nilai yang ada di view
Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
}); // memanggil / return code yg ada di file daftar_nilai.blade.php di folder view

//h2
//menggunakan routing ke controller
Route::get('/siswa', [SiswaController::class, 'dataSiswa']);

//mengarahkan ke controller dashboardController
//prefix atau grouping
Route::prefix('admin')->group(function(){

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::get('/staff', [StaffController::class, 'index']);

// ini adalah route untuk bagian pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/', [PegawaiController::class, 'update']);
Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

// ini adalah route untuk bagian divisi
Route::get('/divisi', [DivisiController::class, 'index']);
Route::get('/divisi/create', [DivisiController::class, 'create']);
Route::post('/divisi/store', [DivisiController::class, 'store']);
Route::get('/divisi/edit/{id}', [DivisiController::class, 'edit']);
Route::post('/divisi/update/', [DivisiController::class, 'update']);
Route::get('/divisi/show/{id}', [DivisiController::class, 'show']);
Route::get('/divisi/delete/{id}', [DivisiController::class, 'destroy']);

// ini adalah route untuk bagian jabatan
Route::get('/jabatan', [JabatanController::class, 'index']);


});

//nantinya pegawai tersebut mengambil pelatihan dan pada table pelatihan bertambah

