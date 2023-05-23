<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yg sudah di buat sebelumnya yg ada di file http/controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;

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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::get('/staff', [StaffController::class, 'index']);