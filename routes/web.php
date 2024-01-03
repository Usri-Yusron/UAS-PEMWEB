<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
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
Route::controller(RegisterController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('/', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
});

Route::middleware('auth')->group(function () {
	Route::get('buku', function () {
		return view('buku.index');
	})->name('buku');

	Route::controller(BukuController::class)->prefix('buku')->group(function () {
		Route::get('', 'index')->name('buku');
		Route::get('tambah', 'tambah')->name('buku.tambah');
		Route::post('tambah', 'simpan')->name('buku.tambah.simpan');
		// buat edit data buku
		Route::get('tampilkandata/{id}', 'tampilkandata')->name('buku.tampilkandata');
		Route::post('updatedata/{id}', 'updatedata')->name('buku.tambah.update');
		// rpoute buat hapus data
		Route::get('deletedata/{id}', 'deletedata')->name('buku.deletedata');
	});

	// route buat transaksi
	Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
		// nampilin data di laman utama
		Route::get('', 'index')->name('transaksi');
		// buat tambah data (nampilin dan ngejalanin)
		Route::get('tambah', 'tambah')->name('transaksi.tambah');
		Route::post('tambah', 'simpan')->name('transaksi.tambah.simpan');
		// buat edit data (nampilin dan ngejalanin)
		Route::get('tampilkandata/{id}', 'tampilkandata')->name('transaksi.tampilkandata');
		Route::post('updatedata/{id}', 'updatedata')->name('transaksi.tambah.update');
		// rpoute buat hapus data
		Route::get('deletedata/{id}', 'deletedata')->name('transaksi.deletedata');
	});

	// route buat pelanggan
	Route::controller(PelangganController::class)->prefix('pelanggan')->group(function () {
		// nampilin data di laman utama
		Route::get('', 'index')->name('pelanggan');
		// buat tambah data (nampilin dan ngejalanin)
		Route::get('tambah', 'tambah')->name('pelanggan.tambah');
		Route::post('tambah', 'simpan')->name('pelanggan.tambah.simpan');
		// buat edit data (nampilin dan ngejalanin)
		Route::get('tampilkandata/{id}', 'tampilkandata')->name('pelanggan.tampilkandata');
		Route::post('updatedata/{id}', 'updatedata')->name('pelanggan.tambah.update');
		// rpoute buat hapus data
		Route::get('deletedata/{id}', 'deletedata')->name('pelanggan.deletedata');
	});

});