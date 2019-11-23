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
Route::get('/admin','AdminController@index');
Route::get('/admin/dashboard','AdminController@showdashboard')->name('login');
Route::post('/admin/dashboard','AdminController@dashboard');
//user
Route::get('trangchu','PagesController@trangchu')->name('trangchu');
//Route::get('dangnhap_user','PagesController@dangnhap_user')->name('login');
Route::get('dangki','PagesController@dangki')->name('login');
Route::get('login','PagesController@login')->name('dangnhap');
Route::get('lap_gioithieu','PagesController@lap_gioithieu')->name('lap_gioithieu');
Route::get('repair','PagesController@repair')->name('repair');
Route::get('tintuc','PagesController@tintuc')->name('tintuc');
Route::get('lienhe','PagesController@lienhe')->name('lienhe');
Route::get('giohang','PagesController@giohang')->name('giohang');