<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\InstansiAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\BeritaController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\InstansiController;
use App\Http\Controllers\Web\Instansi2Controller;
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
Route::get('sign-in', [AuthController::class, 'index'])->name('sign-in');
Route::get('profil', [ProfileController::class, 'index'])->name('profil');
Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('statistik', [StatistikController::class, 'index'])->name('statistik');
Route::get('instansi', [InstansiController::class, 'index'])->name('instansi');
Route::get('instansi2', [Instansi2Controller::class, 'index'])->name('instansi2');
Route::get('kritik', [KritikController::class, 'index'])->name('kritik');
Route::get('admin', [DashboardAdminController::class, 'index'])->name('admin');
Route::get('instansicreate', [InstansiAdminController::class, 'instansi'])->name('instansicreate');
Route::get('listinstansi', [InstansiAdminController::class, 'listinstansi'])->name('listinstansi');
Route::get('layananinstansi', [InstansiAdminController::class, 'layananinstansi'])->name('layananinstansi');
Route::get('listlayananinstansi', [InstansiAdminController::class, 'listlayananinstansi'])->name('listlayananinstansi');