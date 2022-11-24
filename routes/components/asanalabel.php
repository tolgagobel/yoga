<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsanaLabelController;

Route::group(['prefix' => 'asanalabel', 'middleware' => 'auth:sanctum'], function () {

    Route::get('/',[AsanaLabelController::class,'indexAsanaLabel']);
    Route::get('/{asanalabel}',[AsanaLabelController::class,'showAsanaLabel']);
    Route::post('/addlabel',[AsanaLabelController::class,'createAsanaLabel']);
    Route::post('/deletelabel/{label}',[AsanaLabelController::class,'deleteAsanaLabel']);
});
