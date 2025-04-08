<?php

use App\Http\Controllers\SallingGroupController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SallingGroupController::class, 'index'])->name('index');
Route::get('/show/{category}', [SallingGroupController::class, 'show'])->name('show');
Route::get('/bought-together/{prod_id}', [SallingGroupController::class, 'boughtTogether'])->name('boughtTogether.show'); 