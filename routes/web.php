<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Livewire\Pkl\Index as PklIndex;
use App\Livewire\Pkl\Create as PklCreate;
use App\Livewire\Industri\Index as IndustriIndex;
use App\Livewire\Industri\Create as IndustriCreate;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:siswa',
    'check_user_role',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/pkl', PklIndex::class)->name('pkl.index');
    Route::get('/pkl/create', PklCreate::class)->name('pkl.create');
   
    Route::get('/industri', IndustriIndex::class)->name('industri.index');
    Route::get('/industri/create', IndustriCreate::class)->name('industri.create');
});