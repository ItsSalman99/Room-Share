<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RoomsController;
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

//Normal Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/rooms', [HomeController::class, 'rooms']);
Route::get('/room/{id}', [HomeController::class, 'room'])->name('singleroom');
Route::get('/reservations', [ReservationsController::class, 'index'])->name('reservation');
Route::post('/reserved', [ReservationsController::class,'ReserveRoom'])->name('roomReserved');
Route::get('/destroyReservation', [ReservationsController::class, 'destroyReservation'])->name('destroyReservations');

//Admin Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','verified'])->name('dashboard');
Route::get('/dashboard/rooms', [DashboardController::class, 'rooms'])->middleware(['auth','verified'])->name('rooms.index');
Route::get('/Add-Rooms', [DashboardController::class, 'addrooms'])->middleware(['auth','verified'])->name('addrooms');
Route::post('/Add-Rooms', [RoomsController::class, 'Create'])->middleware(['auth','verified'])->name('createRooms');
require __DIR__.'/auth.php';
