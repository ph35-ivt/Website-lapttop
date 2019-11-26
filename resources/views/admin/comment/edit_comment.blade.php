@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Comment
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-comment', $comment->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">New ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="new_id" value="{{$comment->new_id}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">User ID</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="user_id" value="{{$comment->user_id}}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Product ID</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="product_id" value="{{$comment->product_id}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Content</label>
                            <<textarea  id="exampleInputFile" class="form-control" 
                            name="content" value="{{$comment->content}}"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
