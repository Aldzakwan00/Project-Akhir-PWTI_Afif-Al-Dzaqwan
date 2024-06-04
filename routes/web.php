<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home'); 

Route::get('/edit', function () {
    return view('edit');
})->name('edit'); 

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);


