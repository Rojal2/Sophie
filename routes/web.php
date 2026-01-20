<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/home', 'home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/test-prep', 'courses')->name('test-prep');
    Route::get('/destinations', 'destinations')->name('destinations');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/consultation', 'consultation')->name('consultation');
    Route::post('/consultation', 'storeInquiry')->name('consultation.store');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.settings');
    Route::post('/settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.settings.update');

    Route::resource('banners', \App\Http\Controllers\Admin\BannerController::class);
    Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class);
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('destinations', \App\Http\Controllers\Admin\DestinationController::class);
    Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class);
    Route::resource('inquiries', \App\Http\Controllers\Admin\InquiryController::class)->only(['index', 'show', 'destroy']);
});
