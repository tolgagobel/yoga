<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SequenceController;

Route::group(['prefix' => 'sequence', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/',[SequenceController::class,'index']);
    Route::get('/{sequence}',[SequenceController::class,'show']);
    Route::post('/add',[SequenceController::class,'create']);
    Route::post('/update/{sequence}',[SequenceController::class,'update']);
    Route::post('/delete/{sequence}',[SequenceController::class,'delete']);
});
