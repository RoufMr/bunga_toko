<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BungaController;
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

// route untuk homepae
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/order', [HomeController::class, 'order'])->name('order');
// Route::get('/produk/{id}', [HomeController::class, 'show'])->name('show');
// Route::get('/Produk/show', [HomeController::class, 'show'])->name('show');


// route unuk login
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'dologin'])->name('dologin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//masuk dashboard
Route::get('/dash', [DashController::class, 'index'])->name('dash')->middleware('auth');


//bunga
Route::get('/bunga', [BungaController::class, 'index'])->name('bunga');
Route::get('/bunga/create', [BungaController::class, 'create'])->name('create.bunga');
Route::post('/bunga/create', [BungaController::class, 'store'])->name('store.bunga');
Route::get('/bunga/{id}/edit', [BungaController::class, 'edit'])->name('bunga.edit');
Route::post('/bunga/{id}', [BungaController::class, 'update'])->name('update.bunga');
Route::delete('/bunga/{id}', [BungaController::class, 'destroy'])->name('bunga.destroy');
Route::get('/bunga/{id}', [BungaController::class, 'show'])->name('bunga.show');

