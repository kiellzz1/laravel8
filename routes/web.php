<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::redirect('/dashboard', '/home')->name('dashboard');

    Route::view('/home', 'pages.home')->name('home');
    Route::view('/about', 'pages.about')->name('about');
    Route::view('/projects', 'pages.projects')->name('projects');
    Route::view('/contact', 'pages.contact')->name('contact');
    Route::view('/music', 'pages.music')->name('music');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/password', function (\Illuminate\Http\Request $request) {
        $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return back()->with('status', 'password-updated');
    })->name('password.update');
});

require __DIR__.'/auth.php';
