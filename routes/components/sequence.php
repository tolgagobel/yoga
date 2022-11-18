<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SequenceController;

Route::group(['prefix' => 'sequence'], function () {
        Route::get('/',[SequenceController::class,'index']);
        Route::post('/add',[SequenceController::class,'create']);
        Route::post('/update/{sequence}',[SequenceController::class,'update']);
        Route::post('/remove/{sequence}',[SequenceController::class,'destroy']);

});
