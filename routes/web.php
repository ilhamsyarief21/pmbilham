<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
Route::get('/detail-registrasi', [DashboardController::class, 'detailRegistrasi'])->name('detail-registrasi');
Route::get('/sidebar-user', [DashboardController::class, 'sidebarUser'])->name('sidebar-user');
Route::get('/homepageuser', [DashboardController::class, 'homepageUser'])->name('homepageuser');
Route::get('/daftar-mahasiswa', [DashboardController::class, 'daftarMahasiswa'])->name('daftar-mahasiswa');
Route::get('/css-pendaftaran', [DashboardController::class, 'cssPendaftaran'])->name('css-pendaftaran');

Route::get('/sign-up', [UserController::class, 'showSignUpForm'])->name('sign-up.form');
Route::post('/sign-up', [UserController::class, 'signUp'])->name('sign-up');
Route::get('/sign-in', [UserController::class, 'showSignInForm'])->name('sign-in.form');
Route::post('/sign-in', [UserController::class, 'signIn'])->name('sign-in');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    // Your protected routes go here
});
