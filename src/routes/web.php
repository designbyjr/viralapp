<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\OptInController;
use App\Http\Controllers\ShareController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'show'])->name('landing');
Route::post('/opt-in', [OptInController::class, 'store'])->name('opt-in');
Route::get('/verify', [OptInController::class, 'showVerifyForm'])->name('verify.show');
Route::post('/verify', [OptInController::class, 'verify'])->name('verify.perform');
Route::post('/share', ShareController::class)->middleware('throttle:15,1')->name('share.store');
Route::get('/leaderboard', LeaderboardController::class)->name('leaderboard');
