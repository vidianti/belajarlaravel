
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE - RESTORANKITA
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'index'])
    ->name('landing.home');

Route::get('/about', [LandingController::class, 'about'])
    ->name('landing.about');

Route::get('/services', [LandingController::class, 'services'])
    ->name('landing.services');

Route::get('/menu', [LandingController::class, 'menu'])
    ->name('landing.menu');

Route::get('/booking', [LandingController::class, 'booking'])
    ->name('landing.booking');

Route::get('/team', [LandingController::class, 'team'])
    ->name('landing.team');


/*
|--------------------------------------------------------------------------
| ADMIN PAGE
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])
        ->name('dashboard');

    Route::get('/sweet-alert', [AdminController::class, 'alert'])
        ->name('alert');

    Route::get('/login', [AdminController::class, 'login'])
        ->name('login');

    Route::get('/calendar', [AdminController::class, 'calendar'])
        ->name('calendar');

    Route::get('/forms', [AdminController::class, 'forms'])
        ->name('forms');

    Route::get('/tables', [AdminController::class, 'tables'])
        ->name('tables');
});
