@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add User
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('store-user')}}" method="POST">
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
                            <label for="exampleInputFile">Email</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="email">
                            @if($errors->has('email'))
                                <p style="color: red">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Password</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="password">
                            @if($errors->has('password'))
                                <p style="color: red">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Level</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="level">
                            @if($errors->has('level'))
                                <p style="color: red">{{$errors->first('level')}}</p>
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