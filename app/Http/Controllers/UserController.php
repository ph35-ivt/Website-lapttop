<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listUsers = User::all();
        $listUsers = User::paginate(5);
        return view('admin.users.list_user', compact('listUsers'));
        // $listUsers = User::orderBy('id', 'desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.users.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $data =$request->except('_token');
        User::create($data);
        return redirect()->route('list-user')->with(['success'=>'---Thêm thành công!---']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('admin.users.detail_user',compact('user'));
        }
            return redirect()->route('list-user')->with(['success'=>'---Không tồn tại!---']); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit_user',compact('user'));
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
        $user = User::find($id);
        $data= $request->only('name', 'email', 'password','level');
        $user->update($data);
        return redirect()->route('list-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('list-user');
    }
    public function searchUser(Request $request){
        $listUsers = User::paginate(5);
        $search = User::where('name','like','%'.$request->search.'%')
                    ->orwhere('email',$request->search)
                    ->get();
        return view('admin.users.search_user',compact('search','listUsers'));
    }
}
