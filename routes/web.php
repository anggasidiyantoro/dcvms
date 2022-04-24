<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\PDFController;

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
    return view('home');
});

// Register 
Route::post('/', [RegisterController::class, 'simpan']);

// Login 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard 
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');
Route::resource('dashboard/visitor', VisitorController::class)->middleware('auth');
Route::get('kirim-email','App\Http\Controllers\MailController@index');

Route::get('create-pdf-file', [PDFController::class, 'index']);