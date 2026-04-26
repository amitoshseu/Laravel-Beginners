<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::view('/', 'welcome')->name('home');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::get('tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::get('tasks', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::post('tasks', [TaskController::class, 'store'])
    ->name('tasks.store');

Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])
    ->name('tasks.toggle');

Route::delete('tasks/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');
