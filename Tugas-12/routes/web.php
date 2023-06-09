<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'utama']);

Route::get('/register', [AuthController::class, 'daftar']);

Route::post('/welcome', [AuthController::class, 'selamatDatang']);

Route::get('/table', function() {
    return view('pages.table');
});

Route::get('/data-table', function() {
    return view('pages.data-table');
});