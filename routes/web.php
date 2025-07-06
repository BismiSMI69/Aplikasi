<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;
use App\Models\Customer;

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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/menu', [MenuController::class, 'index'])->middleware('auth');
Route::get('/reservasi', [ReservationController::class, 'index'])->middleware('auth');
Route::get('/customers', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->middleware('auth');
Route::get('/customer-add', [CustomerController::class, 'create'])->middleware('auth');
Route::post('/customer', [CustomerController::class, 'store'])->middleware('auth');
Route::get('/customer-edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->middleware('auth');
Route::get('/customer-delete/{id}', [CustomerController::class, 'delete'])->middleware(['auth', 'must-admin']);


Route::delete('/customer-destroy/{id}', [CustomerController::class, 'destroy'])->middleware(['auth', 'must-admin']);


Route::get('/customer-food/{id}', [CustomerController::class, 'makanan'])->middleware('auth');
Route::post('/customer-foodup/{id}', [CustomerController::class, 'makananup'])->middleware('auth');



