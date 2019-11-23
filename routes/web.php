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
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



Route::get('/admin/dang-nhap','AdminController@getDangNhap')->name('dangnhapad');

Route::get('admin/dashboard','AdminController@dashboard')->name('dashboard');

Route::post('admin/dang-nhap', 'AdminController@postDangNhap');

Route::get('admin/dang-xuat', 'AdminController@dangXuat')->name('dangxuatad');

Route::get('admin/quen-mat-khau', 'AdminController@getQuenMatKhau')->name('quenmatkhau');


