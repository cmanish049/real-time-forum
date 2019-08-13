<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/questions', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/questions/{question}/reply', 'ReplyController');
Route::post('/like/{reply}', 'LikesController@like');
Route::delete('/like/{reply}', 'LikesController@like');
