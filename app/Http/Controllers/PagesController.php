<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\News;
use App\Repairs;
use App\User;
use App\Comment;
use App\Cart;
use App\Order;
use App\Order__detail;
use App\Mail\CheckMail;
use Mail;
use Session;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    function __construct(Request $request)
    {
        $categories = Category::all();
        $product = Product::all();
       // $tintuc = News::all();
        view()->share('categories',$categories);
        view()->share('product',$product);

    }
    function trangchu()
    {    
       $tintuc1 = News::paginate(2);
    	return view('pages.trangchu',compact('tintuc1'));
    }
     function tk()
    {    
      return view('pages.loctk');
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
        $categories = Category::find($id);
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

   function postcomment(Request $request,$id){
        $comment= new Comment;
        $comment->cm_name = $request->cm_name;
        $comment->cm_email = $request->cm_email;
        $comment->product_id =$id;
        $comment->content = $request->content;
        $comment->save();
        return back();
    }
    function getgiohang($id){
          $product1 = Product::paginate(4);
          $comment = Comment::where('product_id',$id)->get();
          $pt = Product::find($id);
          return view('pages.giohang',compact('product1','pt','comment'));
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
           return redirect('trangchu.html');
      }
      else {
        return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
      }
     }
    function getdangxuat()
    {
      Auth::logout();
      return redirect('trangchu.html');
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
          $input = $request->all();
          Mail::send('pages.dangki', array('name'=>$input["name"],'email'=>$input["email"]),
           function($message){
          $message->to('buiduy057@gmail.com', 'Duy')->subject('Visitor Feedback!');
             });
          // Session::flash('flash_message', 'Send message successfully!');
          return redirect('trangchu.html')->with('thongbao','Bạn đã đăng kí thành công thành công');
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
        return redirect('trangchu.html')->with('thongbao','Bạn đã sửa thành công');
    }
    function timkiem(Request $rq){
   
      $timkiem = Product::where('name','like','%'.$rq->search.'%')
                    ->orWhere('price',$rq->search)
                    ->paginate(5);
                  
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
    function delcart($id){
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
    function editcart(Request $req, $id, $qty){

        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->SuaSoLuong($product, $id, $qty); 
        $req->session()->put('cart', $cart);
       return redirect()->back();
    }
    function dathang(){
       $users = Auth::user();
       return view('pages.dathang',compact('users'));
    }
    
    function postdathang(Request $request){

       $this->validate($request,
          [
              'name' =>'required|min:3|max:32',
              'email'=>'required|min:6|max:32',
              'phone'=>'required',
              'address'=>'required'
          ],
          [
              'name.required' =>'Bạn chưa nhập tên',
              'name.min'=>'Độ dài kí tự lớn hơn 3 nhỏ hơn 32',
              'name.max'=>'Độ dài kí tự lớn hơn 3 nhỏ hơn 32',
              'email.required' =>'Bạn chưa nhập email',
              'email.min'=>'Độ dài kí tự lớn hơn 3 nhỏ hơn 32',
              'email.max'=>'Độ dài kí tự lớn hơn 3 nhỏ hơn 32',
              'phone.required' =>'Bạn chưa nhập số điện thoại',
              'address.required' =>'Bạn chưa nhập address'
          ]);
      $data = $request->except('carts');
      $cart= Session::get('cart');
      $or= new Order;
      $or->name= $request->name;
      $or->email =$request->email;
      $or->phone =$request->phone;
      $or->address =$request->address;
      $or->date_order = date('Y-m-d');
      $or->total = $cart->totalPrice;
      $or->payment = $request->payment;
      $or->status = 1;
      $or->save();
      foreach ($cart->items as $key => $value) {
          $order_detail = new Order_Detail;
          $order_detail->order_id = $or->id;
          $order_detail->product_id = $key;
          $order_detail->quantity = $value['qty'];
          $order_detail->price = ($value['price']/$value['qty']);
          $order_detail->save();
        // OrderDetail::create($order_detail);
      }
      \DB::enableQueryLog();
      $order = Order::with(['order__details', 'order__details.products'])->find($or->id);
      \Mail::to($request->email)->send(new CheckMail($order));
      Session::forget('cart');
      echo "<script>alert('Cảm ơn các bạn đã đặt hàng. Chúng tôi sẽ liên hệ bạn sớm nhất');
     window.location ='".url('/dathang')."'
       </script>";
    }
    
}
