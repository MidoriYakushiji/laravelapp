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

//6-21 person/add
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//6-24 person/edit/update
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

//6-27 person/delete
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//6-34 board
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');


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

//7-6 rest
Route::resource('rest', 'RestappController');

//7-12 hello/rest
Route::get('hello/rest', 'HelloController@rest');

//7-16 session
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');
