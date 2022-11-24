<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSequenceController;

Route::group(['prefix' => 'usersequence', 'middleware' => 'auth:sanctum'], function () {

    Route::get('/', [UserSequenceController::class,'index']);
    Route::get('/{usersequence}', [UserSequenceController::class,'show']);
    Route::post('/addUserSequence', [UserSequenceController::class,'create']);
    Route::post('/deleteUserSequence/{user}', [UserSequenceController::class,'delete']);
});
