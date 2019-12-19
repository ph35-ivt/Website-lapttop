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
}

);
// Route::get('mail', function () {
//     return view('mail.mail');
// });
Route::get('tk', function () {
    return view('pages.loctk');
});
Route::get('/admin', 'AdminController@index');
Route::get('/admin/dashboard', 'AdminController@showdashboard')->name('login');
Route::post('/admin/dashboard', 'AdminController@dashboard');
Route::get('trangchu.html', 'PagesController@trangchu')->name('trangchu');
Route::get('dangki', 'PagesController@getdangki');
Route::post('dangki', 'PagesController@postdangki')->name('login');
Route::get('dangnhap', 'PagesController@getdangnhap')->name('dangnhap');
Route::post('dangnhap', 'PagesController@postdangnhap')->name('postdangnhap');
Route::get('nguoidung', 'PagesController@getnguoidung')->name('getnguoidung');
Route::post('nguoidung', 'PagesController@postnguoidung')->name('postnguoidung');
Route::get('timkiem', 'PagesController@timkiem')->name('timkiem');
Route::get('dangxuat', 'PagesController@getdangxuat');
Route::get('lap_gioithieu.html', 'PagesController@lap_gioithieu')->name('lap_gioithieu');
Route::get('giohang/{id}/{product_slug}.html', 'PagesController@getgiohang')->name('getgiohang');
Route::get('sanpham/{id}/{product_slug}.html', 'PagesController@sanpham')->name('sanpham');
Route::get('repair.html', 'PagesController@repair')->name('repair');
Route::get('tintuc.html', 'PagesController@tintuc')->name('tintuc');
Route::get('lienhe.html', 'PagesController@lienhe')->name('lienhe');
Route::post('comment/{id}', 'PagesController@postcomment');
Route::get('giohang', 'PagesController@giohang')->name('giohang');
Route::get('addcart/{id}', 'PagesController@addcart')->name('addcart');
Route::get('editcart/{id}/{qty}', 'PagesController@editcart')->name('editcart');
Route::get('delcart/{id}', 'PagesController@delcart')->name('delcart');
Route::get('delcartone/{id}', 'PagesController@delcartone')->name('delcartone');
Route::get('dathang', 'PagesController@dathang')->name('dathang');
Route::post('dathang', 'PagesController@postdathang')->name('postdathang');
