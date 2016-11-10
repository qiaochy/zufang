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
<<<<<<< .mine
Route::get('map','RoomController@map');//地图找房
Route::get('maptext','RoomController@maptext');//地图信息
=======


>>>>>>> .theirs
Route::get('roomcon','RoomController@roomcon');
Route::get('notice','NoticeController@notice');
Route::get('abouts','AboutsController@abouts');//关于我们
Route::get('touch','AboutsController@touch');//联系我们
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
