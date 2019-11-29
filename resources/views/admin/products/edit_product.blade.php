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
                    <form action="{{route('update-product', $product->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category_id</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="category_id" value="{{$product->category_id}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="product_slug" value="{{$product->product_slug}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Content</label>
                            <input type="text" id="exampleInputFile" class="form-control" name="content" value="{{$product->content}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Price</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="price" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Link</label>
                            <input type="file" id="exampleInputFile" class="form-control" 
                            name="link" value="{{$product->link}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Quantity</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="status" value="{{$product->status}}">
                        </div>
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
