<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\ShowEntidades;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', ShowEntidades::class )->name('dashboard');
});
