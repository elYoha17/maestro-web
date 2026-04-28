<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::redirect('/dashboard', '/')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/agents/{user}', [AgentController::class, 'store'])->name('agents.store');
    Route::put('/agents/{agent}', [AgentController::class, 'update'])->name('agents.update');
});

require __DIR__.'/settings.php';
