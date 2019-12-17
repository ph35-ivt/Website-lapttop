@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Detail Category
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-category', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="id" value="{{$category->id}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name" value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category Slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="category_slug" value="{{$category->category_slug}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Description</label>
                            <textarea  style="resize: none" rows="5"  id="exampleInputFile" class="form-control" name="description" >{{$category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Order</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="order" value="{{$category->order}}">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Status: </label>
                            @if($category->status==0)
                                <span class="text-ellipsis">ẩn</span>
                            @else
                                <span class="text-ellipsis">Hiện</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Create At</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="created_at" value="{{$category->created_at}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Update At</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="updated_at" value="{{$category->updated_at}}">
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection


