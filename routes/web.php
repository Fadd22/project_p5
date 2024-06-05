<?php

use Illuminate\Support\Facades\Route;

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
//route
Route::resource('barang', App\Http\Controllers\BarangController::class)->middleware('auth');
Route::resource('pembeli', App\Http\Controllers\PembeliController::class)->middleware('auth');
Route::resource('kasir', App\Http\Controllers\KasirController::class)->middleware('auth');
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class)->middleware('auth');