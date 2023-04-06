<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SessionsController;
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

Route::get('/', [MoviesController::class, 'index'])->name('home');

Route::get('/listing/{movie}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('admin/authorization', [SessionsController::class, 'create'])->name('admin.authorization');


Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.panel');

    Route::post('/dashboard', [SessionsController::class, 'store'])->name('admin.dashboard');
});
