<?php

use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index')
    ->middleware('auth');  //auth
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//7-34 auth
Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');


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
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

//jissyu6_1
Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');

//jissyu6_3
Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

//jissyu6_4
Route::get('jissyu15', 'Jissyu6_4Controller@index');
Route::get('jissyu15/add', 'Jissyu6_4Controller@add');
Route::post('jissyu15/create', 'Jissyu6_4Controller@create');
