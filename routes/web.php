<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
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
Route::get('/room-by', [RoomsController::class, 'SearchByCity'])->name('searchroom');
Route::get('confirm-booking', [CheckoutController::class,'Confirmbooking'])->middleware(['auth'])->name('customerprofile');
Route::post('/checkout-info', [CustomerController::class, 'profile'])->name('addprofile');
Route::get('/checkout-pay', [CheckoutController::class, 'payview'])->middleware(['auth'])->name('pay');
Route::post('/pay-out', [CheckoutController::class, 'confirmPay'])->middleware(['auth'])->name('payout');

//Admin Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/rooms', [DashboardController::class, 'rooms'])->middleware(['auth'])->name('rooms.index');
Route::get('/Add-Rooms', [DashboardController::class, 'addrooms'])->middleware(['auth'])->name('addrooms');
Route::post('/Add-Rooms', [RoomsController::class, 'Create'])->middleware(['auth'])->name('createRooms');
Route::post('/deleteroom/{id}', [RoomsController::class,'deleteroom'])->name('delroom');
Route::get('my-reservations', [ReservationsController::class,'myreservations'])->middleware(['auth'])->name('user-reservations');
Route::get('edit-room/{id}', [RoomsController::class,'edit'])->middleware(['auth'])->name('editroom');
Route::post('/updateroom/{id}', [RoomsController::class,'update'])->middleware(['auth'])->name('updateroom');

//Customer Routes
Route::post('/storecustomer', [CustomerController::class, 'store'])->name('storeCustomer');

Route::get('/profile', [DashboardController::class, 'profile'])->middleware(['auth'])->name('profileinfo');

require __DIR__.'/auth.php';
