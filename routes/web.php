<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// routes/web.php

Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/sign-in', [DashboardController::class, 'showSignIn'])->name('sign-in');
Route::get('/sign-up', [DashboardController::class, 'showSignUp'])->name('sign-up');
Route::get('/pendaftar', [DashboardController::class, 'pendaftar'])->name('pendaftar');


