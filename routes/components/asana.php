<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsanaController;

Route::group(['prefix' => 'asana', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [AsanaController::class, 'index']);
    Route::get('/{asana}', [AsanaController::class, 'show']);
    Route::post('/add', [AsanaController::class, 'create']);
    Route::post('/update/{asana}', [AsanaController::class, 'update']);
    Route::post('/delete/{asana}', [AsanaController::class, 'delete']);
});
