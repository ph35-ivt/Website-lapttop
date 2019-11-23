<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
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
    public function postDangNhap(Request $req)
    {
        $email=$req->email;
        $password=$req->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'level' => 1])) {
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->with(['errorLogin'=>'Email đăng nhập hoặc mật khẩu không đúng!!!']);
        }
    }

    public function dangXuat()
    {
        auth()->logout();
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
