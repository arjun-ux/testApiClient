<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiLoginController;
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

Route::get('/', [ApiController::class, 'indexApi'])->name('data');
Route::get('/data/create', [ApiController::class, 'create'])->name('create.data');
Route::post('/data/create', [ApiController::class, 'storeData'])->name('store.data');


// login dengan api
Route::get('/login', [ApiLoginController::class, 'loginApi']);
Route::post('/login', [ApiLoginController::class, 'doLoginApi'])->name('dologin');
