<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'label', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [\App\Http\Controllers\LabelController::class, 'index']);
    Route::post('/add', [\App\Http\Controllers\LabelController::class, 'create']);
    Route::post('/update/{label}', [\App\Http\Controllers\LabelController::class, 'update']);
    Route::post('/remove/{label}', [\App\Http\Controllers\LabelController::class, 'destroy']);
});
