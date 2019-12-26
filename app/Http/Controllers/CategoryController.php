<?php

namespace App\Http\Controllers;

use App\Category;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategories = Category::orderBy('id','desc')->paginate(5);
        
        // dd($listCategories);
        return view('admin.categories.list_category', compact('listCategories'));  
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $listCategories = Category::all();
        return view('admin.categories.add_category',compact('listCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $data =$request->except('_token');
        // dd($data);
        Category::create($data);//chen data vào database
        return redirect()->route('list-category')->with('success','Create category successful !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin.categories.detail_category',compact('category'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // \DB::enableQueryLog();
        $listCategories = Category::where('id','<>', $id)->where('parent_category_id','<>',$id)->orWhere('parent_category_id', NULL)->get();
        // dd(\DB::getQueryLog());
        $category = Category::find($id);
        return view('admin.categories.edit_category',compact('category','listCategories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $data= $request->only('parent_category_id','name','slug','description','order','status');//lấy data form
        $category->update($data);//update
        return redirect()->route('list-category')->with('success','Update category successful !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listProducts = Product::where('category_id',$id)->get();
        foreach ($listProducts as $product) {
            $listOrder_details = OrderDetail::where('product_id', $product->id)->get();
            foreach ($listOrder_details as $detail) {
                $detail->delete();
            }
            $product->delete();
        }
        Category::destroy($id);
        return redirect()->route('list-category')->with('success','Delete category successful !');
    }
}
