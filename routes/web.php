<?php

use App\Http\Controllers\DrinkController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('drink')->group(function () {
    Route::get('/', [DrinkController::class, 'index'])->name('drink.index');
    Route::get('/create', [DrinkController::class, 'create'])->name('drink.create');
    Route::post('/', [DrinkController::class, 'store'])->name('drink.store');
    Route::get('/{drink}/edit', [DrinkController::class, 'edit'])->name('drink.edit');
    Route::put('/{drink}', [DrinkController::class, 'update'])->name('drink.update');
    Route::get('/{drink}', [DrinkController::class, 'show'])->name('drink.show');
    Route::delete('/{drink}', [DrinkController::class, 'destroy'])->name('drink.destroy');
});