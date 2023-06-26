<?php

use App\Http\Controllers\Web\BeritaController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\InstansiController;
use App\Http\Controllers\Web\KritikController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\StatistikController;
use App\Http\Controllers\Web\SurveiController;
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
    return view('pages.web.main');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profil', [ProfileController::class, 'index'])->name('profil');
Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('statistik', [StatistikController::class, 'index'])->name('statistik');
Route::get('instansi', [InstansiController::class, 'index'])->name('instansi');
Route::get('kritik', [KritikController::class, 'index'])->name('kritik');
Route::get('survei', [SurveiController::class, 'index'])->name('survei');