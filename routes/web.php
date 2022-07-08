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

//jissyu5_1
Route::get('jissyu10', 'Jissyu5_1Controller@index');
Route::get('jissyu10/show', 'Jissyu5_1Controller@show');

//jissyu5_2
Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', '___(6)___');
Route::post('___(7)___', 'Jissyu5_2Controller@remove');

