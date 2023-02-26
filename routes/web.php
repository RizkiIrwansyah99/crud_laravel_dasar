<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;

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



Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/{id}', [SiswaController::class, 'show'])->where('id', '[0-9]+');

Route::get('/', [HalamanController::class, 'index']);
Route::get('/kontak', [HalamanController::class, 'kontak']);
Route::get('/tentang', [HalamanController::class, 'tentang']);

Route::resource('siswa', SiswaController::class)->middleware('login');

Route::get('/sesi', [SessionController::class, 'index'])->middleware('tamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('tamu');
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register'])->middleware('tamu');
Route::post('/sesi/create', [SessionController::class, 'create'])->middleware('tamu');

Route::get('/', function () {
    return view('sesi.welcome');
})->middleware('tamu');
