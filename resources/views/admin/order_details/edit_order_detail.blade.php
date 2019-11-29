@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Order_detail
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-order-detail', $detail->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Order ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="order_id" value="{{$detail->order_id}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Product ID</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="product_id" value="{{$detail->product_id}}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Price</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="price" value="{{$detail->price}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Quantity</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="quantity" value="{{$detail->quantity}}">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
