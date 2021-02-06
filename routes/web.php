<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AdminServicesController;
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

Route::get('/language/{locale}', [LocalizationController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/en', [HomeController::class, 'index']);


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::prefix('services')->group(function () {
        Route::get('/', [AdminServicesController::class, 'index'])->name('admin.services.index');
        Route::get('/create', [AdminServicesController::class, 'create'])->name('admin.services.create');
        Route::get('/store', [AdminServicesController::class, 'store'])->name('admin.services.store');
    });
});

require __DIR__ . '/auth.php';
