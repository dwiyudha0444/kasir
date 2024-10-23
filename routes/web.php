<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login.index');
});

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/pay', function () {
    return view('pay.index');
});

Route::get('/paysuccess', function () {
    return view('pay.pay_succes.index');
});

Route::get('/add_kategori', function () {
    return view('home.add_kategori.index');
});

Route::get('/add_produk', function () {
    return view('home.add_produk.index');
});