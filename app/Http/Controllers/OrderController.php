<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listOrders = Order::all();
        $listOrders = Order::paginate(5);
        return view('admin.orders.list_order', compact('listOrders'));
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = OrderDetail::find($id);
        $product = Product::find($id);
        $order = Order::find($id);
        if ($order) {
            return view('admin.orders.detail_order',compact('order','product','detail'));
        }
            return redirect()->route('list-order')->with('success','Không tồn tạir!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.orders.edit_order',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $data= $request->only('customer_id','payment','status');
        $order->update($data);
        return redirect()->route('list-order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('list-order');
    }
    public function searchOrder(Request $request){
        $listOrders = Order::paginate(5);
        $search = Order::where('name','like','%'.$request->search.'%')
                    ->orwhere('phone',$request->search)
                    ->get();
        return view('admin.orders.search_order',compact('search','listOrders'));
    }
    public function active($id)
    {
        $order = Order::find($id);
        $listOrder_details = OrderDetail::all();
        // trừ đi số lượng sản phẩm
        if ($listOrder_details) {
            foreach ($listOrder_details as $od) {
                $product = Product::find($od->product_id);
                // $product->quantity = $product->products->quantity - $product->order_details->quantity;
                $product->save();
            }
        }
         // cập nhật lại trạng thái đơn hàng
        $order->status = Order::STATUS_DONE;
        $order->save(); 
        return redirect()->back()->with('success','Xử lý đơn hàng thành công!');     
    }
}
