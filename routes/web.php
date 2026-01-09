<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\PokedexController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

// Workshop
Route::get('/workshop', [WorkshopController::class, 'index']);
Route::post('/workshop', [WorkshopController::class, 'store'])->name('workshop.store');
Route::get('/', function () {
    return redirect()->route('pokedex.index');
});
Route::resource('pokedex', PokedexController::class);

