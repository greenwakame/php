<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
    return View::make('hello.index');
});

Route::get('user','UserController@showIndex');

Route::controller('users','UserController');

//DB接続テスト
Route::get('database',function(){
 $data=DB::select('select * from collections where id=?',array(1));
 echo var_dump($data);
 });