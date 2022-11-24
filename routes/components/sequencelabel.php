<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SequenceLabelController;

Route::group(['prefix' => 'sequencelabel', 'middleware' => 'auth:sanctum'], function () {

    Route::get('/', [SequenceLabelController::class,'indexSequenceLabel']);
    Route::get('/{sequencelabel}', [SequenceLabelController::class,'showSequenceLabel']);
    Route::post('/addLabel', [SequenceLabelController::class,'createSequenceLabel']);
    Route::post('/deleteLabel/{label}', [SequenceLabelController::class,'deleteSequenceLabel']);
});
