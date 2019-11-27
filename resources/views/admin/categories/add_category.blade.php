@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Category
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('store-category')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Parent Category ID</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="parent_category_id">
                            @if($errors->has('parent_category_id'))
                                <p style="color: red">{{$errors->first('parent_category_id')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name">
                            @if($errors->has('name'))
                                <p style="color: red">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="category_slug">
                            @if($errors->has('category_slug'))
                                <p style="color: red">{{$errors->first('category_slug')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Description</label>
                            <textarea style="resize: none" rows="5" id="exampleInputFile" class="form-control" name="description"></textarea>
                            @if($errors->has('description'))
                                <p style="color: red">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Order</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="order">
                            @if($errors->has('order'))
                                <p style="color: red">{{$errors->first('order')}}</p>
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