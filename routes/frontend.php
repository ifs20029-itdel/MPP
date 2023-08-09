<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\InstansiAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\AgencyController;
use App\Http\Controllers\Web\BeritaController;
use App\Http\Controllers\Web\FrontController;
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

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');


Route::get('profil', [ProfileController::class, 'index'])->name('profil');
Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('statistik', [StatistikController::class, 'index'])->name('statistik');

Route::get('agency', [AgencyController::class, 'index'])->name('agency');
Route::get('agency/{slug}', [AgencyController::class, 'show'])->name('agency.detail');
Route::get('agency/{slug}/{service_slug}', [AgencyController::class, 'showService'])->name('agency.service.detail');
Route::post('agency/{slug}', [AgencyController::class, 'store'])->name('booking.store');

Route::get('news', [FrontController::class, 'news'])->name('news');
Route::get('news/{slug}', [FrontController::class, 'newsDetail'])->name('news.detail');

Route::get('critic-suggestion', [FrontController::class, 'criticSuggestion'])->name('critic-suggestion');
Route::post('critic-suggestion', [FrontController::class, 'storeCriticSuggestion'])->name('critic-suggestion.store');
