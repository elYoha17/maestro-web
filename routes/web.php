<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');

    Route::post('/agents/{user}', [AgentController::class, 'store'])->name('agents.store');
    Route::put('/agents/{agent}', [AgentController::class, 'update'])->name('agents.update');
});

require __DIR__.'/settings.php';
