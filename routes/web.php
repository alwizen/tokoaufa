<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
    return view('admin.product.index');
});

// product ROUTE

Route::get('/barang', [ProductController::class, 'index'])->name('product.index');
Route::get('/barang/tambah', [ProductController::class, 'create'])->name('product.create');
Route::post('/barang', [ProductController::class, 'store'])->name('product.store');
Route::get('/barang/{id}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/barang/{id}', [ProductController::class,'update'])->name('product.update');
Route::delete('/barang/{id}', [ProductController::class,'destroy'])->name('product.destroy');

// route pelanggan
Route::get('/pelanggan', [ClientController::class, 'index'])->name('client.index');
Route::get('/pelanggan/tambah', [ClientController::class,'create'])->name('client.create');
Route::post('/pelanggan', [ClientController::class, 'store'])->name('client.store');
Route::get('/pelanggan/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/pelanggan{id}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/pelanggan/{id}', [ClientController::class, 'destroy'])->name('client.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
