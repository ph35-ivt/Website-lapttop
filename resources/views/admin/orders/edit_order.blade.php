@extends('admin.main')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Order
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{route('update-order', $order->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="customer_id" value="{{$order->customer_id}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Payment</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" 
                            name="payment" value="{{$order->payment}}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <input type="text" id="exampleInputFile" class="form-control" 
                            name="status" value="{{$order->status}}">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
