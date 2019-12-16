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
                            <select name="parent_category_id" class="form-control" id="exampleInputEmail1">
                                @foreach($listCategories as $category)
                                    <option value="{{$category->parent_category_id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
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
                            <textarea style="resize: none" rows="5" id="exampleInputFile" class="form-control" name="description">{{$category->description}}"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Order</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="order" value="{{$category->order}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <select name="status" class="form-control" id="exampleInputEmail1">
                                <option value="0" @if($category->status==0) checked @endif>ẩn
                                </option>
                                <option value="1" @if($category->status==1) checked @endif>hiện
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
