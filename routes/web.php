<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SekolahController;

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


Route::get('/indexpeserta', [PesertaController::class, 'indexpeserta']);
Route::post('/daftarpeserta', [PesertaController::class, 'daftarpeserta']);
Route::get('/peserta/edit/{id}', [PesertaController::class, 'edit']);
Route::post('/ubahpeserta/{id}', [PesertaController::class, 'ubah']);
Route::get('/peserta/hapus/{id}', [PesertaController::class, 'hapus']);


Route::get('/indexsekolah', [SekolahController::class, 'indexsekolah']);
Route::post('/daftarsekolah', [SekolahController::class, 'daftarsekolah']);
Route::get('/sekolah/edit/{id}', [SekolahController::class, 'edit']);
Route::post('/ubahsekolah/{id}', [SekolahController::class, 'ubah']);
Route::get('/sekolah/hapus/{id}', [SekolahController::class, 'hapus']);

Route::get('/', [AuthController::class, 'homepage']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/loginpage', [AuthController::class, 'loginpage']);
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);
Route::get('/registerpage', [AuthController::class, 'registerpage']);
Route::post('/registered', [AuthController::class, 'registered']);
