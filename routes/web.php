<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Livewire\Pkl\Index as PklIndex;
use App\Livewire\Pkl\Create as PklCreate;
use App\Livewire\Industri\Index as IndustriIndex;
use App\Livewire\Industri\Create as IndustriCreate;

Route::get('/', function () {
    return view('welcome');
});

// Semua route yang butuh login dan validasi user
Route::middleware(['auth', 'verified', 'check_user_email', 'check_user_role'])
    ->group(function () {
        Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

        // Lindungi route industri
        Route::name('Industri.')->group(function () {
            Route::get('/industris', IndustriIndex::class)->name('industri.index');
            Route::get('/industris/create', IndustriCreate::class)->name('industri.create');
        });

        // Lindungi route pkl
        Route::name('Pkl.')->group(function () {
            Route::get('/pkls', PklIndex::class)->name('pkl.index');
            Route::get('/pkls/create', PklCreate::class)->name('pkl.create');
        });
    });
