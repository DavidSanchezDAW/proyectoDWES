<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;
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

Route::post('events/participate/{event}', [EventController::class, 'participate'])->name('events.participate');
Route::post('events/unparticipate/{event}', [EventController::class, 'unparticipate'])->name('events.unparticipate');

Route::get('register', [LoginController::class, 'registerForm']);
Route::post('register', [LoginController::class, 'register'])->name('register');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('users', UserController::class);
Route::resource('events', EventController::class);
Route::resource('messages', MessageController::class);