<?php

use App\Http\Controllers\Guest\TrainSeederController;
use App\Http\Controllers\TrainController;
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

// Abbiamo scritto guest.products (e guest.home) specificando guets perché potrei avere sia una home per i guest sia una home per gli admin quindi è bene specificare
Route::get('/', function () {
    return view('pages.home');});

    // il primo '/trains' è dove l'utente va, [TrainController::class è dove mi porta
Route::get('/trains', [TrainController::class, 'index']) ->name('trains.index');
Route::get('/trainsxseeder', [TrainSeederController::class, 'index']) ->name('trainsxseeder.index');
