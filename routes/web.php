<?php
use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index');  
Route::post('hello','HelloController@post');

// use App\Http\Middleware\HelloMiddleware;
Route::get('hello','HelloController@index')->middleware(HelloMiddleware::class);

//------実習用------
Route::get('jissyu2','JissyuController@index');

Route::get('jissyu3_1', 'Jissyu3_1Controller@index');
Route::post('jissyu3_1', 'Jissyu3_1Controller@post');

//jissyu3_2
Route::get('jissyu4', 'Jissyu3_2Controller@index');
Route::post('jissyu4', 'Jissyu3_2Controller@post');

//jissyu3_3
Route::get('jissyu5', 'Jissyu3_3Controller@index');

//Chapter3_2
Route::get('chapter3_2', 'Chapter3_2Controller@index');

//Chapter3_7
Route::get('ohara', 'OharaController@index');

//jissyu4_1
Route::get('jissyu6', 'Jissyu4_1Controller@index');
Route::post('jissyu6', 'Jissyu4_1Controller@post');

//jissyu4_2
Route::get('jissyu7', 'Jissyu4_2Controller@index');
Route::post('jissyu7', 'Jissyu4_2Controller@post');

//jissyu4_3
Route::get('jissyu8', 'Jissyu4_3Controller@index');
Route::post('jissyu8', 'Jissyu4_3Controller@post');

//kouka1_1
Route::get('kouka1_1', 'Kouka1_1Controller@index');