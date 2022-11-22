<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SequenceController;

Route::group(['prefix' => 'sequence', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/',[SequenceController::class,'index']);
    Route::post('/add',[SequenceController::class,'create']);
    Route::post('/update/{sequence}',[SequenceController::class,'update']);
    Route::post('/remove/{sequence}',[SequenceController::class,'destroy']);

    Route::get('/getseqeunceasana', [SequenceController::class,'indexAsana']);
    Route::post('/addAsana', [SequenceController::class,'createSequenceAsana']);
    Route::post('/deleteAsana/{asana}', [SequenceController::class,'destroySequenceAsana']);

    Route::get('/getsequencelabel', [SequenceController::class,'indexLabel']);
    Route::post('/addLabel', [SequenceController::class,'createSequenceLabel']);
    Route::post('/deleteLabel/{label}', [SequenceController::class,'destroySequenceLabel']);

});
