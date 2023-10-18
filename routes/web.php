<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ActiveController as AdminActiveController;

// end admin

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

// admin
Route::group(
    [
        'prefix'     => 'admin',
        'as'         => 'admin.',
        'middleware' => ['role:admin'],
    ],
    function() {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('user', AdminUserController::class);
        Route::resource('product', AdminProductController::class);

        Route::post('/active', [AdminActiveController::class, 'active'])->name('active');
    }
);
// end admin

require __DIR__ . '/auth.php';