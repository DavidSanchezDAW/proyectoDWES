<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [StaticController::class, 'inicio'])->name('inicio');

Route::get('miembros', [UserController::class, 'index'])->name('miembros');




Route::get('dondeEstamos', [StaticController::class, 'dondeEstamos'])->name('dondeEstamos');
Route::get('cookies', [StaticController::class, 'cookies'])->name('cookies');
Route::post('events/participate/{event}', [EventController::class, 'participate'])->name('events.participate')->middleware('auth');
Route::post('events/unparticipate/{event}', [EventController::class, 'unparticipate'])->name('events.unparticipate')->middleware('auth');
Route::post('events/cambiarVisibilidad/{event}', [EventController::class, 'cambiarVisibilidad'])->name('events.cambiarVisibilidad')->middleware('auth');
Route::get('register', [LoginController::class, 'registerForm']);
Route::post('register', [LoginController::class, 'register'])->name('register');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('users', UserController::class);
Route::resource('events', EventController::class);
Route::resource('messages', MessageController::class);

//TODO
//los mensajes se muestran al reves en el show y en el index
//igual hay que hacer 23948394238 comprobaciones en muchos sitios
