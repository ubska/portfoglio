<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/projects', function () {
    return Inertia::render('Projects', [
        'projects' => [
            ['id' => 1, 'title' => 'Progetto 1'],
            ['id' => 2, 'title' => 'Progetto 2'],
            ['id' => 3, 'title' => 'Progetto 3'],
        ],
    ]);
})->name('projects');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
