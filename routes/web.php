<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::view('/', 'home')->name('home');
Route::view('/home', 'home'); // redirect or alias

Route::view('/about', 'about')->name('about');

Route::get('/services', function () {
    return view('services', ['services' => config('data_services')]);
})->name('services');

Route::get('/test-prep', function () {
    return view('test-prep', [
        'tests' => config('data_courses.test_submission'),
        'languages' => config('data_courses.languages')
    ]);
})->name('test-prep');

Route::get('/destinations', function () {
    return view('destinations', ['destinations' => config('data_destinations')]);
})->name('destinations');

Route::view('/contact', 'contact')->name('contact');

Route::get('/consultation', function () {
    return view('consultation');
})->name('consultation');

Route::post('/consultation', function (Request $request) {
    // Validate
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'interest' => 'nullable|string',
        'comments' => 'nullable|string',
    ]);

    // Send Email (Mock behavior for now, similar to legacy)
    // In production: Mail::to('info@sophie.com.np')->send(new ConsultationRequested($validated));

    // Legacy behavior was @mail which often fails locally.
    // We will just flash success message.

    return redirect()->route('consultation')->with('success', 'Thank you, ' . $validated['name'] . '. We have received your details and will get back to you shortly.');
})->name('consultation.store');
