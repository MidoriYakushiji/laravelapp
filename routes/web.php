<?php

use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index');  
Route::post('hello','HelloController@post');

// use App\Http\Middleware\HelloMiddleware;
Route::get('hello','HelloController@index')->middleware(HelloMiddleware::class);


//5-10 insert
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

//5-11 update
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//5-16 delete
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

//5-20 show
Route::get('hello/show', 'HelloController@show');

//6-4 person
Route::get('person', 'PersonController@index');

//6-9 person/find
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');


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

//test

