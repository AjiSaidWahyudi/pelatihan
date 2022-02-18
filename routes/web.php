<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarnilaiController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/show/{id}', [App\Http\Controllers\SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/edit/{id}', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/update/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/delete/{id}', [App\Http\Controllers\SiswaController::class, 'delete'])->name('siswa.delete');

Route::resource('/daftar_nilai', DaftarnilaiController::class);