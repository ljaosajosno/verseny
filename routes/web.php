<?php

use App\Models\Competition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\CompetitionController;

Route::get('/', function () {
    return view('home');
});

Route::get('/addComp', function () {
    return view('addComp');
});

Route::get('/addRound', function () {
    $competitions = Competition::all();
    return view('addRound', compact('competitions'));
});

Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/addComp', [CompetitionController::class, 'addComp']);

Route::post('/addRound', [RoundController::class, 'addRound']);
