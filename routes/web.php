<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
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

Route::get('miembros', [UserController::class, 'index'])->name('miembros');


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

Route::resource('users', UserController::class);
Route::resource('events', EventController::class);
Route::resource('messages', MessageController::class);