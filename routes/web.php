<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
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

Route::get( '/' , [ClientController::class, 'index']) ->name('index');
Route::post('/index/store', [ClientController::class, 'store'])->name('index.store') ;

Route::get('/dashboard', [DepositController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get( '/about' , [HomeController::class, 'index']) ->name('about');

Route::get( '/' , [DepositController::class, 'index']) ->name('index');
Route::post('/dashboard/store', [DepositController::class, 'store'])->name('dashboard.store') ;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
