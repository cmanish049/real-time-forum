<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/questions', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
