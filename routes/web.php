<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\LanguageController;
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

Route::get('admin/authorization', [SessionsController::class, 'index'])->name('admin.authorization');

Route::post('admin/authorization', [SessionsController::class, 'login'])->name('admin.authorized');


Route::prefix('admin/dashboard')->middleware('admin')->group(function () {

    Route::get('', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout');

    Route::get('/create', [QuoteController::class, 'create'])->name('quotes.create');

    Route::post('/quotes', [QuoteController::class, 'store'])->name('quotes.store');

    Route::get('/quotes/{quote}/edit', [QuoteController::class, 'edit'])->name('quotes.edit');

    Route::put('/quotes/', [QuoteController::class, 'update'])->name('quotes.update');

    Route::delete('/quotes/{id}', [QuoteController::class, 'destroy'])->name('quotes.destroy');
    
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');

    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');

    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');

    Route::put('/movies/}', [MovieController::class, 'update'])->name('movies.update');

    Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

});

Route::post('/language', [LanguageController::class, 'changeLanguage'])->name('language');