<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Log;
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

Route::get('home', HomeController::class.'@index')->name('home');
Route::get('showcaseconsultant', HomeController::class.'@showcaseconsultant')->name('showcaseconsultant');
Route::get('sesi', HomeController::class.'@sesi')->name('sesi');
Route::get('jadwal', HomeController::class.'@jadwal')->name('jadwal');

Route::get('login', LoginController::class.'@index')->name('login');
Route::post('masuk', LoginController::class.'@masuk')->name('masuk');
Route::post('logout', LoginController::class.'@logout')->name('logout');

Route::get('register', RegisterController::class.'@index')->name('register');
Route::post('daftar', RegisterController::class.'@daftar')->name('daftar');