<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SequenceAsanaController;
use App\Http\Controllers\SequenceController;

Route::group(['prefix' => 'sequenceasana', 'middleware' => 'auth:sanctum'], function () {

    Route::get('/', [SequenceController::class,'index']);
    Route::get('/{sequenceasana}', [SequenceAsanaController::class,'showSequenceAsana']);
    Route::post('/addAsana', [SequenceAsanaController::class,'createSequenceAsana']);
    Route::post('/deleteAsana/{asana}', [SequenceAsanaController::class,'deleteSequenceAsana']);
});
