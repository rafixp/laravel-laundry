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

Route::get('/admin/home', [App\Http\Controllers\kasirController::class, 'homeView']);
Route::get('/admin/outlet', [App\Http\Controllers\kasirController::class, 'outletView']);
Route::get('/admin/outlet/tambahoutlet', [App\Http\Controllers\KasirC])
