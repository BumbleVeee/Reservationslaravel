<?php

use App\Http\Controllers\FlightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/flights', [FlightController::class, 'index']);
Route::get('/flights/{flight}', [FlightController::class, 'show']);
Route::put('/flights/{flight}', [FlightController::class, 'update']);
Route::post('/flights', [FlightController::class, 'store']);
Route::delete('/flights/{flight}', [FlightController::class, 'destroy']);

Route::get('/users', [FlightController::class, 'index']);
Route::get('/users/{user}', [FlightController::class, 'show']);
Route::put('/users/{user}', [FlightController::class, 'update']);
Route::post('/users', [FlightController::class, 'store']);
Route::delete('/usres/{user}', [FlightController::class, 'destroy']);