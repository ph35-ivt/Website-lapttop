@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit User
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-user', $user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="name" value="{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="email" value="{{$user->email}}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Password</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="password" value="{{$user->password}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Level</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="level" value="{{$user->level}}">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
