<?php

use App\Models\User;
use App\Models\Round;
use App\Models\Competition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\CompetitorController;
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

Route::get('/addCompetitor', function () {
    $competitions = Competition::all();
    $users = User::all();
    $rounds = Round::all();
    return view('addCompetitor', compact('competitions', 'users', 'rounds'));
});

Route::post('/register', [UserController::class, 'register']);

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/addComp', [CompetitionController::class, 'addComp']);

Route::post('/addRound', [RoundController::class, 'addRound']);

Route::post('/addCompetitor', [CompetitorController::class, 'addCompetitor']);
