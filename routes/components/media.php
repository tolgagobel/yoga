<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

Route::group(['prefix' => 'media', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [MediaController::class, 'index']);
    Route::get('/{media}', [MediaController::class, 'show']);
    Route::post('/add', [MediaController::class, 'add']);
    Route::post('/update/{media}', [MediaController::class, 'update']);
    Route::post('/delete/{media}', [MediaController::class, 'delete']);
});
