<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualController;
use Illuminate\Support\Facades\Route;

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

// Awal Routes pada controller Home
Route::get('/', [HomeController::class, 'daftarMenu'])->name('pelanggan.daftarMenu');
Route::get('/daftarMenu', [HomeController::class, 'daftarMenu'])->name('pelanggan.daftarMenu');
Route::get('/buatPesanan', [HomeController::class, 'buatPesanan'])->name('pelanggan.buatPesanan');
Route::post('/simpanPesanan', [HomeController::class, 'simpanPesanan'])->name('pelanggan.simpanPesanan');
Route::get('/cekstatusPesanan', [HomeController::class, 'cekstatusPesanan'])->name('pelanggan.cekstatusPesanan');
// Akhir Routes pada controller Home


// Awal Routes pada controller Login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');
    Route::post('/proseslogin', [LoginController::class, 'login']);

});
// Route::get('/home', function() {
//     return redirect('/penjual-page/dashboard');
// });
// Akhir Routes pada controller Login


// Awal Routes pada controller Penjual
Route::middleware(['auth'])->group(function () {
    Route::get('/penjual', [PenjualController::class, 'dashboard'])->name('penjual.dashboard');
    Route::get('/penjual/profile', [PenjualController::class, 'profile'])->name('penjual.profile');
    Route::get('/penjual/kelolaMenu', [PenjualController::class, 'kelolaMenu'])->name('penjual.kelolaMenu');
    Route::get('/penjual/tambahMenu', [PenjualController::class, 'tambahMenu'])->name('penjual.tambahMenu');
    Route::post('/penjual/simpanMenu', [PenjualController::class, 'simpanMenu'])->name('penjual.simpanMenu');
    Route::get('/penjual/editMenu/{id}', [PenjualController::class,'editMenu'])->name('penjual.editMenu');
    Route::put('/penjual/updateMenu/{id}', [PenjualController::class,'updateMenu'])->name('penjual.updateMenu');
    Route::delete('/penjual/deleteMenu/{id}', [PenjualController::class,'deleteMenu'])->name('penjual.deleteMenu');
    Route::get('/penjual/kelolaPenjual', [PenjualController::class, 'kelolaPenjual'])->name('penjual.kelolaPenjual');
    Route::get('/penjual/tambahPenjual', [PenjualController::class, 'tambahPenjual'])->name('penjual.tambahPenjual');
    Route::post('/penjual/simpanPenjual', [PenjualController::class, 'simpanPenjual'])->name('penjual.simpanPenjual');
    Route::get('/penjual/editPenjual/{id}', [PenjualController::class,'editPenjual'])->name('penjual.editPenjual');
    Route::put('/penjual/updatePenjual/{id}', [PenjualController::class,'updatePenjual'])->name('penjual.updatePenjual');
    Route::delete('/penjual/deletePenjual/{id}', [PenjualController::class,'deletePenjual'])->name('penjual.deletePenjual');
    Route::get('/penjual/pesananAktif', [PenjualController::class, 'pesananAktif'])->name('penjual.pesananAktif');
    Route::get('/penjual/riwayatPesanan', [PenjualController::class, 'riwayatPesanan'])->name('penjual.riwayatPesanan');
    Route::get('/logout', [PenjualController::class, 'logout'])->name('penjual.logout');
});
// Akhir Routes pada controller Penjual
