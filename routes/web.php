<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryaController; // Pastikan ini ada di paling atas!

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/projects', [KaryaController::class, 'index']);
Route::get('/projects/create', [KaryaController::class, 'create']);
Route::post('/projects/store', [KaryaController::class, 'store']);
