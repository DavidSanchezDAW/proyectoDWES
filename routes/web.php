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
    return view('inicio');
})->name('inicio');

Route::get('miembros', function () {
    return view('miembros');
})->name('miembros');

Route::get('eventos', function () {
    return view('eventos');
})->name('eventos');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('dondeEstamos', function () {
    return view('dondeEstamos');
})->name('dondeEstamos');

Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('register', function () {
    return view('account.register');
})->name('register');

Route::get('login', function () {
    return view('account.login');
})->name('login');