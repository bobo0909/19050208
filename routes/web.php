<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/user/reg', 'Api\ApiController@reg');


Route::post('/user/login', 'Api\ApiController@login');
Route::get('/user/token', 'Api\ApiController@token');
Route::get('/user/postman1', 'Api\ApiController@postman1');

// Route::get('/test/postman','Api\TestController@postman');
// Route::get('/test/postman1','Api\TestController@postman1')
//登陆
Route::post('/login','Api\ApiController@login');
//鉴权
Route::post('/auth','Api\ApiController@auth');
//注册
Route::post('/login/reg','Api\ApiController@reg');
//岩前
Route::get('/login/sign','Api\ApiController@sign');
Route::get('/login/yq','Api\ApiController@yq');

// Route::get('/api/test','Api\TestController@test');

// Route::post('/api/user/reg','Api\TestController@reg');          //用户注册
// Route::post('/api/user/login','Api\TestController@login');      //用户登录
// Route::get('/api/show/data','Api\TestController@showData');     //获取数据接口
// Route::get('/api/user/list','Api\TestController@userList')->middleware('filter');      //用户列表

