<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Models\Qrcode;

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
    return view('welcome');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('test', testController::class);
Route::get('/qr', [QrController::class, 'index'])->name('qr');