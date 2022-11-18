<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsanaController;

Route::group(['prefix' => 'asana'], function () {
    Route::get('/', [AsanaController::class, 'index']);
    Route::post('/add', [AsanaController::class, 'create']);
    Route::post('/update/{asana}', [AsanaController::class, 'update']);
    Route::post('/remove/{asana}', [AsanaController::class, 'destroy']);
});
