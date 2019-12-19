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
                            <select name="parent_category_id" class="form-control" id="exampleInputEmail1" value="{{old('parent_category_id')}}">
                                @foreach($listCategories as $category)
                                    <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('parent_category_id'))
                                <p style="color: red">{{$errors->first('parent_category_id')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="name"
                            name="name" value="{{old('name')}}">
                            @if($errors->has('name'))
                                <p style="color: red">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category_slug</label>
                            <input type="text" id="slug" class="form-control" 
                            name="slug" value="{{old('slug')}}">
                            @if($errors->has('slug'))
                                <p style="color: red">{{$errors->first('slug')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Description</label>
                            <textarea style="resize: none" rows="5" id="exampleInputFile" class="form-control" name="description" ></textarea>
                            @if($errors->has('description'))
                                <p style="color: red">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Order</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="order" value="{{old('order')}}">
                            @if($errors->has('order'))
                                <p style="color: red">{{$errors->first('order')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <select name="status" class="form-control" id="exampleInputEmail1">
                                <option value="0" >UnPublish
                                </option>
                                <option value="1" >Publish
                                </option>
                            </select>
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
