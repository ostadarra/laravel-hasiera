<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\ShowEntidades;

use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', ShowEntidades::class )->name('dashboard');
    Route::get('/mail', [MailController::class, 'index'] )->name('mail');
    Route::get('/enviaremail', [MailController::class, 'enviarEmail'] )->name('enviaremail');
});
