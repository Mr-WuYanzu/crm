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
Route::any("index/index","LinkmanController@index")->middleware('login');//主页
Route::any("linkman/linkman","LinkmanController@linkman");//联系人添加页面
Route::any("linkman/linkmanAdd","LinkmanController@linkmanAdd");//联系人添加执行
Route::any("linkman/linkmanList","LinkmanController@linkmanList");//联系人列表
Route::any("linkman/linkmandetail/{id}","LinkmanController@linkmandetail");//联系人详细信息
Route::any("linkman/linkmandel","LinkmanController@linkmandel");//联系人删除
Route::any("linkman/linkmanupd/{id}","LinkmanController@linkmanupd");//联系人修改页面
Route::any("linkman/linkmanupdadd","LinkmanController@linkmanupdadd");//联系人修改页面
Route::any("login/login","LoginController@login");//登录
Route::any("login/logindo","LoginController@logindo");//登录执行
Route::any("login/quit","LoginController@quit");//退出
Route::any("login/admin","LoginController@admin");//管理员添加
Route::any("login/adminAdd","LoginController@adminAdd");//管理员添加执行
Route::any("login/adminlist","LoginController@adminlist");//管理员列表
