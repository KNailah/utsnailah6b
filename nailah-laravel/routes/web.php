<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalkuliahController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\RuangController;

Route::match(['get', 'post'],'/dsn-data', [DosenController::class, 'index'])->name('dsn-data');
Route::get('/dsn-insert', [DosenController::class, 'create'])->name('dsn-insert');
Route::post('/dsn-insert', [DosenController::class, 'store'])->name('dsn.store');
Route::get('/dsn-edit/{id}', [DosenController::class, 'edit'])->name('dsn.edit');
Route::put('/dsn-edit/{id}', [DosenController::class, 'update'])->name('dsn.update');
Route::delete('/dsn-delete/{id}', [DosenController::class, 'destroy'])->name('dsn.destroy');

Route::match(['get', 'post'],'/jk-data', [JadwalkuliahController::class, 'index'])->name('jk-data');
Route::get('/jk-insert', [JadwalkuliahController::class, 'create'])->name('jk-insert');
Route::post('/jk-insert', [JadwalkuliahController::class, 'store'])->name('jk.store');
Route::get('/jk-edit/{id}', [JadwalkuliahController::class, 'edit'])->name('jk.edit');
Route::put('/jk-edit/{id}', [JadwalkuliahController::class, 'update'])->name('jk.update');
Route::delete('/jk-delete/{id}', [JadwalkuliahController::class, 'destroy'])->name('jk.destroy');

Route::match(['get', 'post'],'/mk-data', [MatakuliahController::class, 'index'])->name('mk-data');
Route::get('/mk-insert', [MatakuliahController::class, 'create'])->name('mk-insert');
Route::post('/mk-insert', [MatakuliahController::class, 'store'])->name('mk.store');
Route::get('/mk-edit/{id}', [MatakuliahController::class, 'edit'])->name('mk.edit');
Route::put('/mk-edit/{id}', [MatakuliahController::class, 'update'])->name('mk.update');
Route::delete('/mk-delete/{id}', [MatakuliahController::class, 'destroy'])->name('mk.destroy');

Route::match(['get', 'post'],'/ruang-data', [RuangController::class, 'index'])->name('ruang-data');
Route::get('/ruang-insert', [RuangController::class, 'create'])->name('ruang-insert');
Route::post('/ruang-insert', [RuangController::class, 'store'])->name('ruang.store');
Route::get('/ruang-edit/{id}', [RuangController::class, 'edit'])->name('ruang.edit');
Route::put('/ruang-edit/{id}', [RuangController::class, 'update'])->name('ruang.update');
Route::delete('/ruang-delete/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy');

Route::get('/', function () {
    return view('welcome');
});
