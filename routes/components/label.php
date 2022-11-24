<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabelController;

Route::group(['prefix' => 'label', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [LabelController::class, 'index']);
    Route::get('/{label}', [LabelController::class, 'show']);
    Route::post('/add', [LabelController::class, 'create']);
    Route::post('/update/{label}', [LabelController::class, 'update']);
    Route::post('/delete/{label}', [LabelController::class, 'delete']);
});
