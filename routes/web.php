<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Livewire\Pkl\Index as PklIndex;
use App\Livewire\Pkl\create as PklCreate;
use App\Livewire\Industri\Index as IndustriIndex;
use App\Livewire\Industri\Create as IndustriCreate;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified', 'check_user_email', 'check_user_role'])
    ->group(function () {
        Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    });


Route::name('nm_folder.')->group(function () {
    Route::get('/pkls', PklIndex::class)->name('pkl.index');
    Route::get('/industris', IndustriIndex::class)->name('industri.index');
});