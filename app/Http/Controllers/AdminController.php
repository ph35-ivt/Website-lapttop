<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Product;
use App\Order;
use App\User;
use App\Comment;


class AdminController extends Controller
{
        use AuthenticatesUsers;

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDangNhap()
    {
        return view('admin.dangnhap');       
    }

    public function dashboard()
    {
        $product_count = Product::count();
        $order_count = Order::count();
        $user_count = User::count();
        $comment_count = Comment::count();
        $orders = Order::where('status',0)->get();
        if (request()->date_from && request()->date_to) {
            $orders = Order::where('status',0)->whereBetween('created_at',[request()->date_from, request()->date_to])->get();
        }
        return view('admin.dashboard',compact('product_count','order_count','user_count','comment_count','orders'));
    }
    public function postDangNhap(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        // dd($email,$password);

        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->with(['errorLogin'=>'Email đăng nhập hoặc mật khẩu không đúng!!!']);
        }
    }

    public function dangXuat(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return view('admin.dangnhap');
    }

    public function getQuenmatkhau()
    {
        return view('admin.quenmatkhau');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
