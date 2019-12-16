@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Product
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-product', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select name="category_id" class="form-control" id="exampleInputEmail1"">
                                @foreach($listCategories as $category)
                                    <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="product_slug" value="{{$product->product_slug}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Content</label>
                            <textarea  style="resize: none" rows="5"  id="exampleInputFile" class="form-control" name="content" >{{$product->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Price</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="price" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Link</label>
                            <label for="exampleInputFile"></label>
                            <input type="file" id="exampleInputFile" class="form-control" 
                            name="link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Quantity</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <select name="status" class="form-control" id="exampleInputEmail1">
                                <option value="0" @if($product->status==0) checked @endif>hết hàng
                                </option>
                                <option value="1" @if($product->status==1) checked @endif>còn hàng
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
