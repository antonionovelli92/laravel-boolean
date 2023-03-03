<?php

use App\Http\Controllers\EggController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


// Rotte per gestire la risorsa egg
Route::resource('eggs', EggController::class);


// Rotte riempitive
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');



Route::get('/about', function () {
    return view('about');
})->name('about');
