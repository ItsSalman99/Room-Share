<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/rooms', [HomeController::class, 'rooms']);
Route::get('/room/{id}', [HomeController::class, 'room'])->name('singleroom');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','verified'])->name('dashboard');
Route::get('/Add-Rooms', [DashboardController::class, 'addrooms'])->middleware(['auth','verified'])->name('addrooms');
Route::post('/saverooms', [DashboardController::class, 'saverooms'])->middleware(['auth','verified'])->name('saverooms');
require __DIR__.'/auth.php';
