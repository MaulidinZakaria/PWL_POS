<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

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

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('createKategori');
Route::post('/kategori', [KategoriController::class, 'store'])->name('storeKategori');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('editKategori');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('updateKategori');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('destroyKategori');
Route::get('/user', [UserController::class, 'index'])->name('/user');


Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

Route::get('/form-level', function () {
    return view('level_form');
});

Route::get('/form-user', function () {
    return view('user_form');
});

Route::resource('m_user', POSController::class);