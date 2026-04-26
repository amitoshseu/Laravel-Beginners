<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

Route::get('tasks', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('tasks/create', [TaskController::class, 'create'])
        ->name('tasks.create');

    Route::post('tasks', [TaskController::class, 'store'])
        ->name('tasks.store');

    Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])
        ->name('tasks.toggle');

    Route::delete('tasks/{task}', [TaskController::class, 'destroy'])
        ->name('tasks.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
