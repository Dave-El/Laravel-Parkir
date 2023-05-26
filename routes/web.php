<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\parkir;
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
Route::get('/parkir', [Parkir::class, 'index']);
Route::post('parkir/save', [Parkir::class, 'proses']);
Route::delete('hapus/{id}', [Parkir::class, 'hapus']);
Route::get('edit/{id}', [Parkir::class, 'edit']);
Route::put('update/{id}', [Parkir::class, 'Update']);
