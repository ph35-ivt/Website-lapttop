@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Product
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('store-product')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name">
                            @if($errors->has('name'))
                                <p style="color: red">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category_id</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="category_id">
                            @if($errors->has('category_id'))
                                <p style="color: red">{{$errors->first('category_id')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="product_slug">
                            @if($errors->has('product_slug'))
                                <p style="color: red">{{$errors->first('product_slug')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Content</label>
                            <textarea style="resize: none" rows="5" id="exampleInputFile" class="form-control" name="content"></textarea>
                            @if($errors->has('content'))
                                <p style="color: red">{{$errors->first('content')}}</p>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Price</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="price">
                            @if($errors->has('price'))
                                <p style="color: red">{{$errors->first('price')}}</p>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Link</label>
                            <input type="file" id="exampleInputFile" class="form-control" 
                            name="link">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Quantity</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="quantity">
                            @if($errors->has('quantity'))
                                <p style="color: red">{{$errors->first('quantity')}}</p>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="status">
                            @if($errors->has('status'))
                                <p style="color: red">{{$errors->first('status')}}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-info">ADD</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection