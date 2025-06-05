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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:siswa|guru',

])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pkls', PklIndex::class)->name('pkl.index');
    Route::get('/pkl/create', PklCreate::class)->name('pkl.create');
    Route::get('/industris', IndustriIndex::class)->name('industri.index');
    Route::get('/industri/create', IndustriCreate::class)->name('industri.create');
});
