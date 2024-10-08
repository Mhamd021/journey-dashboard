<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\AuthController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::get('postcomments/{post}','App\Http\Controllers\CommentController@postcomments');
Route::apiResource('posts', PostController::class);
Route::post('ModifyPost/{post}','App\Http\Controllers\PostController@ModifyPost');

Route::apiResource('comments', CommentController::class);
Route::post('ModifyComment/{comment}','App\Http\Controllers\CommentController@ModifyComment');
Route::apiResource('friends', FriendController::class);

Route::get('/journeys','App\Http\Controllers\JourneyController@apijourney');
Route::get('/journey/{journey}','App\Http\Controllers\JourneyController@showjourneyapi');


