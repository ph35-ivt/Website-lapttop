@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Category
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-category', $category->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputPassword1">parent_category_id</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="parent_category_id" value="{{$category->parent_category_id}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name" value="{{$category->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Category_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="category_slug" value="{{$category->category_slug}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Description</label>
                            <input type="text" id="exampleInputFile" class="form-control" name="description" value="{{$category->description}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Order</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="order" value="{{$category->order}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="status" value="{{$category->status}}">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
