<?php

use Illuminate\Support\Facades\Route;
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('sign-up', 'AuthController@signUp');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
Route::apiResource('/questions', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/questions/{question}/reply', 'ReplyController');
Route::post('/like/{reply}', 'LikesController@like');
Route::delete('/like/{reply}', 'LikesController@like');
