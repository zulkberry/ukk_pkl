<?php

use App\livewire\Industri\Index as IndustriIndex;
use App\Livewire\Pkl\Index as PklIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:siswa|guru', // ⬅️ hanya siswa atau guru yang boleh masuk
])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');;
    Route::get('/pkls', \App\Livewire\Pkl\Index::class)->name('pkl.index');
    Route::get('/pkl/create', \App\Livewire\Pkl\Create::class)->name('pkl.create');
    Route::get('/industris', \App\Livewire\Industri\Index::class)->name('industri.index');
    Route::get('/industri/create', \App\Livewire\Industri\Create::class)->name('industri.create');
});
