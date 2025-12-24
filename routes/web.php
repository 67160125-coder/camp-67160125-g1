<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

// Workshop
Route::get('/workshop', [WorkshopController::class, 'index']);
Route::post('/workshop', [WorkshopController::class, 'store'])->name('workshop.store');

