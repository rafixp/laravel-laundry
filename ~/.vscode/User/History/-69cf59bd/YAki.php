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

Route::get('/admin/home', [App\Http\Controllers\adminController::class, 'homeView']);
Route::get('/admin/outlet', [App\Http\Controllers\adminController::class, 'outletView']);
Route::get('/admin/outlet/tambahoutlet', [App\Http\Controllers\adminController::class, 'tambahOutletView']);
Route::post('/admin/outlet/tambahoutlet', [App\Http\Controllers\adminController::class, 'tambahOutlet']);
Route::get('/admin/outlet/hapus/{id}', [App\Http\Controllers\adminController::class, 'hapusOutlet']);
Route::get('/admin/outlet/edit/{id}', [App\Http\Controllers\adminController::class, 'editOutletView']);
Route::post('/admin/outlet/editoutlet/{id}', [App\Http\Controllers\adminController::class, 'editOutlet']);
Route::get('/admin/member/', [App\Http\Controllers\adminController::class, 'memberView']);
                        <option value="L">Laki-Laki</option>

