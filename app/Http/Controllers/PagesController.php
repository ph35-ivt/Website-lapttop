<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Product;
use App\News;
use App\Repairs;
use App\User;
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
       // view()->share('tintuc',$tintuc);
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
    function giohang(){
          return view('pages.giohang');
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
     function postdangki(){
        $users = new User();
        $users->name = $request->name;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect('trangchu')->with('thongbao','Bạn đã sửa thành công');
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
}
