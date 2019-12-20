<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listComments = Comment::orderBy('id','desc')->paginate(5);
        return view('admin.comment.list_comment',compact('listComments'));
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
     * @param  \App\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function show(Commment $commment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('admin.comment.edit_comment',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->find($id);
        $data= $request->only('cm_name','cm_email','product_id','content');
        $comment->update($data);
        return redirect()->route('list-comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commment $commment)
    {
        //
    }
   
    
}
