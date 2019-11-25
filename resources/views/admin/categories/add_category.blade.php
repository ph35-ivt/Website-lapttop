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
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Category_slug</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="category_slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Description</label>
                            <textarea style="resize: none" rows="5" id="exampleInputFile" class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Order</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="order">
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