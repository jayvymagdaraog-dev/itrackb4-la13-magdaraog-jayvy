<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/movies/featured', [MovieController::class, 'featured'])->name('movies.featured');

Route::get('/movies/filter/{year?}', function ($year = null) {
    return redirect()->route('movies.index', $year ? ['year' => $year] : []);
});

Route::resource('movies', MovieController::class);