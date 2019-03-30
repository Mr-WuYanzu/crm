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
Route::any("linkman/linkman","LinkmanController@linkman");

//客户信息
Route::any("client/clientadd","ClientController@clientadd");//添加
Route::any("client/clientadddo","ClientController@clientadddo");//添加执行
Route::any("client/clientshow","ClientController@clientshow");//展示
Route::any("client/clientdel","ClientController@clientdel");//删除
Route::any("client/clientupd/{c_id}","ClientController@clientupd");//修改
Route::any("client/clientupddo","ClientController@clientupddo");//修改执行