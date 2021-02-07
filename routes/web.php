<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
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

$currentLocale = app()->getLocale();
/* other languages */
foreach (config('localization.languages') as $locale) {
    app()->setLocale($locale);
    Route::prefix($locale)->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::get(trans('routes.about'), [HomeController::class, 'about']);
        Route::get('/hizmetlerimiz', [ServicesController::class, 'index']);
    });
};
app()->setLocale($currentLocale); 
/* some tr routes for seo*/
Route::get('/language/{locale}', [LocalizationController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/{service}', [ServicesController::class, 'show'])->name('services.show');





Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::prefix('services')->group(function () {
        Route::get('/', [AdminServicesController::class, 'index'])->name('admin.services.index');
        Route::get('/create', [AdminServicesController::class, 'create'])->name('admin.services.create');
        Route::post('/store', [AdminServicesController::class, 'store'])->name('admin.services.store');
    });
});

require __DIR__ . '/auth.php';
