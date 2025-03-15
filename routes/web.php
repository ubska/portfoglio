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
            [
                'id' => 1,
                'title' => 'Progetto 1',
                'description' => 'Descrizione del progetto 1.',
                'image' => '/images/project1.jpg',
                'link' => '#',
            ],
            [
                'id' => 2,
                'title' => 'Progetto 2',
                'description' => 'Descrizione del progetto 2.',
                'image' => '/images/project2.jpg',
                'link' => '#',
            ],
        ],
    ]);
});
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
