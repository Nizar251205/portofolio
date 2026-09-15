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

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;

Route::get('/', [TransactionController::class, 'index']);
Route::get('/profil/{slug}', [ProfileController::class, 'show'])->name('profil');
Route::post('/transaction', [TransactionController::class, 'store']);
Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']);
