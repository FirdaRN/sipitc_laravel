<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('/beranda', function () {
    return view('admin.beranda');
});

Route::get('/list', function () {
    return view('admin.list');
});

Route::get('/add', function () {
    return view('admin.add');
});

Route::get('/history', function () {
    return view('admin.history');
});

Route::get('/confirm', function () {
    return view('admin.konfirm');
});

Route::get('/inventaris', function () {
    return view('peminjam.inventaris');
});

Route::get('/pinjam', function () {
    return view('peminjam.pinjam');
});

Route::get('/kontak', function () {
    return view('peminjam.kontak');
});

Route::get('/tentang', function () {
    return view('peminjam.tentang');
});

Route::get('/login', function () {
    return view('login');
});
