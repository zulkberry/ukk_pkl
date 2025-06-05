<?php

use app\livewire\Industri\Index as IndustriIndex;
use app\Livewire\Pkl\Index as PklIndex;
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
    Route::get('/dashboard', [app\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');;
    Route::get('/pkls', \app\Livewire\Pkl\Index::class)->name('pkl.index');
    Route::get('/pkl/create', \app\Livewire\Pkl\Create::class)->name('pkl.create');
    Route::get('/industris', \app\Livewire\Industri\Index::class)->name('industri.index');
    Route::get('/industri/create', \app\Livewire\Industri\Create::class)->name('industri.create');
});
