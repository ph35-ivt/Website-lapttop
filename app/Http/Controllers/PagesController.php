<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Product;
use App\News;
use App\Repairs;
use App\User;
use App\Comment;
use App\Cart;
use App\Customer;
use Session;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    function __construct()
    {
        $categories = Categories::all();
        $product = Product::all();
       // $tintuc = News::all();
        view()->share('categories',$categories);
        view()->share('product',$product);

    }
    function trangchu()
    {   
    	return view('pages.trangchu');
    }
    function lap_gioithieu()
    {   $product1 = Product::paginate(4);
        return view('pages.lap_gioithieu',compact('product1'));
    }
    function repair(){
        $repair = Repairs::paginate(2);
        $product1 = Product::paginate(4);
    	  return view('pages.repair',compact('repair','product1'));
    }
    function sanpham($id)
    {
        $categories = Categories::find($id);
        $sanpham = Product::where('category_id',$id)->paginate(4);  
        return view('pages.sanpham',compact('sanpham','categories'));
    }
     function tintuc(){
         $tintuc1 = News::paginate(2);
         $product1 = Product::paginate(4);
    	 return view('pages.tintuc',compact('tintuc1','product1'));
    }
    function lienhe(){
         $product1 = Product::paginate(4);
    	  return view('pages.lienhe',compact('product1'));
    }
    function getgiohang($id){
        
          $product1 = Product::paginate(4);
          $pt = Product::find($id);
          return view('pages.giohang',compact('product1','pt'));
    }
    function getdangnhap(){
          return view('pages.dangnhap');
    }
    function postdangnhap (Request $request){
     
       $this->validate($request,
          [
              'email' =>'required',
              'password' =>'required|min:3|max:32'
          ],
          [
              'email.required' =>'Bạn chưa nhập Email',
              'password.required'=>'Bạn chưa nhập password',
              'password.min'=>'Độ dài kí tự lớn hơn 3 nhỏ hơn 32',
              'password.max'=>'Độ dài kí tự lớn hơn 3 nhỏ hơn 32'
          ]);
            // Đăng nhập
      if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
      {
           return redirect('trangchu');
      }
      else {
        return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
      }
     }
    function getdangxuat()
    {
      Auth::logout();
      return redirect('trangchu');
    }
    function getdangki(){
     return view('pages.dangki');
    }
     function postdangki(Request $request){
          $users = new User();
          $users->name = $request->name;
          $users->email = $request->email;
          $users->password = bcrypt($request->password);
          $users->level =0;
          $users->save();
          return redirect('trangchu')->with('thongbao','Bạn đã đăng kí thành công thành công');
    }
    function getnguoidung(){
       $user = Auth::user();
       return view('pages.nguoidung',compact('user'));
    }
    function postnguoidung(Request $request){
        $users = Auth::user();
        $users->name = $request->name;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect('trangchu')->with('thongbao','Bạn đã sửa thành công');
    }
    function timkiem(Request $rq){
      $timkiem = Product::where('name','like','%'.$rq->timkiem.'%')
                    ->orwhere('price',$rq->key)
                    ->get();
      return view('pages.timkiem',compact('timkiem'));
    }
    function addcart(Request $rq,$id){
      $product = Product::find($id); 
       // kiểm tra xem có session cart chưa
      $oldCart = Session('cart')?Session::get('cart'):null;
      // bỏ chung vào giỏ hàng
      $cart = new Cart($oldCart);
      $cart -> add($product,$id);
      // put là thêm vào giỏ hàng
      $rq->session()->put('cart',$cart);
      return redirect()->back();
    }
    function editcart($id){
       $oldCart = Session::has('cart')?Session::get('cart'):null;
       $cart = new Cart($oldCart);
       $cart->removeItem($id);
       if(count($cart->items)>0){
        Session::put('cart',$cart);
       }
       else {
         Session::forget('cart');
       }
       return redirect()->back();
    }
    function dathang(){
      return view('pages.dathang');
    }
    
}
