<?php

use App\Http\Controllers\SallingGroupController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SallingGroupController::class, 'index'])->name('home');
Route::post('/search', [SallingGroupController::class, 'search'])->name('search');


