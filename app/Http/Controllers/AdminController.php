<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
        return view('admin.main');
    }
    public function postDangNhap(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        // dd($email,$password);

        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('list-category');
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
