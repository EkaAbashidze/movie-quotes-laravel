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

Route::get('admin/authorization', [SessionsController::class, 'index'])->name('admin.authorization');



Route::prefix('admin/dashboard')->middleware('admin')->group(function () {

    Route::get('', [AdminDashboardController::class, 'index'])->name('admin.panel');

    Route::post('', [SessionsController::class, 'login'])->name('admin.dashboard');
});

Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout');

// edit - view-ს რედაქტირების ფეიჯი
// update - ქმედება
// destroy - წაშლა

// კონცენციური შეცდომები მაქვს. SessionsController უნდა იყოს AuthController, store უნდა იყოს login, 
// MoviesController - მხოლობითში, MovieController

// უნდა დავამატო ტიპები, return and argument types