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
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category_id</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="category_id">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="product_slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Content</label>
                            <textarea style="resize: none" rows="5" id="exampleInputFile" class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Price</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="price">
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
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="status">
                        </div>
                        <button type="submit" class="btn btn-info">ADD</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection