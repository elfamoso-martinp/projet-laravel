<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/membre', [App\Http\Controllers\MembreController::class, 'index'])->name('membre');
Route::get('/membre/cours', [App\Http\Controllers\MembreController::class, 'cours'])->name('cours');
Route::get('/personnes', [App\Http\Controllers\UserControl::class, 'getUsers'])->name('personnes');
