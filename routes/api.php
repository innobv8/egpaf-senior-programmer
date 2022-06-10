<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "question-3"], function () {
    Route::get('create', [\App\Http\Controllers\QuestionThree\QuestionThreeController::class, 'store']);
    Route::get('disable/{string}', [\App\Http\Controllers\QuestionThree\QuestionThreeController::class, 'disable']);
});
