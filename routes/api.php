<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/asd', function () { return 'asd'; });

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

require_once "components/asana.php";
require_once "components/sequence.php";
require_once "components/label.php";
require_once "components/sequenceasana.php";
require_once "components/sequencelabel.php";
require_once "components/asanalabel.php";
require_once "components/media.php";
