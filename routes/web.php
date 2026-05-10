<?php

use Illuminate\Support\Facades\Route;

// Public Controllers
use App\Http\Controllers\PageController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProfileController;

// Admin Controllers
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\InquiryController as AdminInquiryController;
use App\Http\Controllers\Admin\SettingController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/test-prep', 'courses')->name('test-prep');
    Route::get('/destinations', 'destinations')->name('destinations');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/consultation', 'consultation')->name('consultation');
});

/*
|--------------------------------------------------------------------------
| Inquiry (Form Submission)
|--------------------------------------------------------------------------
*/

Route::post('/consultation', [InquiryController::class, 'store'])
    ->name('consultation.store');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::view('/', 'admin.dashboard')->name('dashboard');

        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

        Route::resource('banners', BannerController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('destinations', DestinationController::class);
        Route::resource('teams', TeamController::class);

        Route::resource('inquiries', AdminInquiryController::class)
            ->only(['index', 'show', 'destroy']);
    });

/*
|--------------------------------------------------------------------------
| Dashboard Redirect
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';