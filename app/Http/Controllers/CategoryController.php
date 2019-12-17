<?php

namespace App\Http\Controllers;

use App\Category;
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
        $listCategories = Category::all();
        // $listCategories = Category::orderBy('id', 'desc');
        $listCategories = Category::paginate(5);
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
        Category::create($data);
        return redirect()->route('list-category')->with('success','Thêm sản phẩm thành công!');
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
        if ($category) {
            return view('admin.categories.detail_category',compact('category'));
        }
            echo "Not found";   
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
        $data= $request->only('parent_category_id','name','category_slug','description','order','status');
        $category->update($data);
        return redirect()->route('list-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('list-category');
    }
}
