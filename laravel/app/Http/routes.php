<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
// Route::any('/','TestController@index');
// Route::post('add','TestController@add');
// Route::get('/show','TestController@show');
// Route::get('/del','TestController@del');
// Route::get('/save','TestController@save');
// Route::post('save_data','TestController@save_data');

Route::any('/','IndexController@index');
Route::get('room','RoomController@room');
Route::get('room','RoomController@room');
Route::get('notice','NoticeController@notice');
Route::get('abouts','AboutsController@abouts');
Route::get('index','IndexController@index');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
