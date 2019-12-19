@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Detail Product
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-product', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="id" value="{{$product->id}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="category_id" value="{{$product->category_id}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="slug" value="{{$product->slug}}">
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
                            <img style="width: 100px" src="{{$product->link}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Quantity</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Status: </label>
                            @if($product->status==0)
                                <span class="text-ellipsis">hết hàng</span>
                            @else
                                <span class="text-ellipsis">còn hàng</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Create At</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="created_at" value="{{$product->created_at}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Update At</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="updated_at" value="{{$product->updated_at}}">
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection


