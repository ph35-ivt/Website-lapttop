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

// {{asset('images/->path')}}

Route::get('/admin/dang-nhap','AdminController@getDangNhap')->name('dangnhapad');

Route::get('admin/dashboard','AdminController@dashboard')->name('dashboard')->middleware('adminLogin');

Route::post('admin/dang-nhap', 'AdminController@postDangNhap')->name('dangnhap');

Route::get('admin/dang-xuat', 'AdminController@dangXuat')->name('dangxuatad');

Route::get('admin/quen-mat-khau', 'AdminController@getQuenMatKhau')->name('quenmatkhau');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],
 	function(){
		//list category
		Route::get('/categories', 'CategoryController@index')->name('list-category');
		// create cat
		Route::get('/categories/add', 'CategoryController@add')->name('add-category');
		//store 
		Route::post('/categories', 'CategoryController@store')->name('store-category');
		//delete 
		Route::delete('/categories/{id}', 'CategoryController@destroy')->name('delete-category');
		// show form edit
		Route::get('/categories/{id}/edit','CategoryController@edit')->name('edit-category');
		// update 
		Route::put('/categories/{id}','CategoryController@update')->name('update-category');
		
////////////
		//list product
		Route::get('/products', 'ProductController@index')->name('list-product');
		// show product_detail
		Route::get('/products/{id}/show','ProductController@show')->name('show-product');
		// create cat
		Route::get('/products/add', 'ProductController@add')->name('add-product');
		//store 
		Route::post('/products', 'ProductController@store')->name('store-product');
		//delete 
		Route::delete('/products/{id}', 'ProductController@destroy')->name('delete-product');
		// show form edit
		Route::get('/products/{id}/edit','ProductController@edit')->name('edit-product');
		// update 
		Route::put('/products/{id}','ProductController@update')->name('update-product');
		
		
//////////////
		// list comment
		Route::get('/comments', 'CommentController@index')->name('list-comment');
		//delete 
		Route::delete('/comments/{id}', 'CommentController@destroy')->name('delete-comment');
		// show form edit
		Route::get('/comments/{id}/edit','CommentController@edit')->name('edit-comment');
		// update 
		Route::put('/comments/{id}','CommentController@update')->name('update-comment');
///////////
		//list order
		Route::get('/orders', 'OrderController@index')->name('list-order');
		//delete 
		Route::delete('/orders/{id}', 'OrderController@destroy')->name('delete-order');
		// show form edit
		Route::get('/orders/{id}/edit','OrderController@edit')->name('edit-order');
		// update 
		Route::put('/orders/{id}','OrderController@update')->name('update-order');
///////////
		//list order_detail
		Route::get('/order-details', 'OrderDetailController@index')->name('list-order-detail');
		//delete 
		Route::delete('/order-details/{id}','OrderDetailController@destroy')->name('delete-order-detail');
		// show form edit
		Route::get('/order-details/{id}/edit','OrderDetailController@edit')->name('edit-order-detail');
		// update 
		Route::put('/order-details/{id}','OrderDetailController@update')->name('update-order-detail');
//////////////
		//list uesr
		Route::get('/users', 'UserController@index')->name('list-user');
		// show
		Route::get('/users/{id}/show','UserController@show')->name('show-user');
		// create cat
		Route::get('/users/add', 'UserController@add')->name('add-user');
		//store 
		Route::post('/users', 'UserController@store')->name('store-user');
		//delete 
		Route::delete('/users/{id}', 'UserController@destroy')->name('delete-user');
		// show form edit
		Route::get('/users/{id}/edit','UserController@edit')->name('edit-user');
		// update 
		Route::put('/users/{id}','UserController@update')->name('update-user');
///////////
});


Route::get('trangchu','PagesController@trangchu')->name('trangchu');
Route::get('dangki','PagesController@getdangki');
Route::post('dangki','PagesController@postdangki')->name('login');
Route::get('dangnhap','PagesController@getdangnhap')->name('dangnhap');
Route::post('dangnhap','PagesController@postdangnhap')->name('postdangnhap');
Route::get('nguoidung','PagesController@getnguoidung')->name('getnguoidung');
Route::post('nguoidung','PagesController@postnguoidung')->name('postnguoidung');
Route::get('dangxuat','PagesController@getdangxuat');
Route::get('lap_gioithieu','PagesController@lap_gioithieu')->name('lap_gioithieu');
Route::get('sanpham/{id}/{product_slug}.html','PagesController@sanpham')->name('sanpham');
Route::get('repair','PagesController@repair')->name('repair');
Route::get('tintuc','PagesController@tintuc')->name('tintuc');
Route::get('lienhe','PagesController@lienhe')->name('lienhe');
Route::get('giohang','PagesController@giohang')->name('giohang');

