<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProducts = Product::orderBy('id','desc')->paginate(5);
        // dd($product);
        return view('admin.products.list_product', compact('listProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $listCategories = Category::all();
        return view('admin.products.add_product',compact('listCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $data =$request->except('_token');
        $link = rand(1,9999).$request->file('link')->getClientOriginalName();
        // dd($link);
        $data['link'] = 'user/images/product/'.$link;
        $request->file('link')->move('user/images/product/',$link);
        Product::create($data);
        return redirect()->route('list-product')->with('success','Create Product successful !');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.detail_product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $listCategories = Category::all();
        return view('admin.products.edit_product',compact('product','listCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data= $request->only('name','category_id','slug','content','price','link','quantity','status');
        if($request->hasFile('link'))
        {
            $link = rand(1,9999).$request->file('link')->getClientOriginalName();        
            $data['link'] = 'user/images/product/'.$link;
            $request->file('link')->move('user/images/product/',$link);
        }
        // dd('link')
        $product->update($data);
        return redirect()->route('list-product')->with('success','Update Product successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listOrder_details = OrderDetail::where('product_id', $id)->get();
        foreach ($listOrder_details as $detail) {
            $detail->delete(); 
        }        
        Product::destroy($id);
        return redirect()->route('list-product')->with('success','Delete product successful !');
    }
    public function searchProduct(Request $request){
        $listProducts = Product::paginate(5);
        $search = Product::where('name','like','%'.$request->search.'%')
                    ->orwhere('price',$request->search)
                    ->get();
        // dd($search);
        return view('admin.products.search_product',compact('search','listProducts'));
    }
}
