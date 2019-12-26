<?php

namespace App\Http\Controllers;

use App\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listOrder_details = Order_Detail::all();
        // return view('admin.order_details.list_order_detail', compact('listOrder_details'));
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
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetail $order_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $detail = Order_Detail::find($id);
        // return view('admin.order_details.edit_order_detail',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $detail = Order_Detail::find($id);
        // $data= $request->only('order_id','product_id','price','quantity');
        // $detail->update($data);
        // return redirect()->route('list-order-detail');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order_Detail  $order_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Order_Detail::destroy($id);
        // return redirect()->route('list-order-detail');
    }
    
}
