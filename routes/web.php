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
    return view('pages.web.main');
});


Route::get('/pages/profil', function () {
    return view('pages.web.profil');
});

Route::get('/pages/berita', function () {
    return view('pages.web.berita');
});

Route::get('/pages/statistik', function () {
    return view('pages.web.statistik');
});

Route::get('/pages/instansi', function () {
    return view('pages.web.instansi');
});

Route::get('/pages/kritik', function () {
    return view('pages.web.kritik');
});

Route::get('/pages/survei', function () {
    return view('pages.web.survei');
});
