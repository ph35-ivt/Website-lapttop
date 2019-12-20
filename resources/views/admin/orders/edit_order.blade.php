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
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="customer_id" value="{{$order->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">phone</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="customer_id" value="{{$order->phone}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                            name="customer_id" value="{{$order->address}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Payment</label>
                            <select name="payment" class="form-control" id="exampleInputEmail1">
                                <option value="0" @if($order->payment==0) checked @endif>ATM
                                </option>
                                <option value="1" @if($order->payment==1) checked @endif>CASH
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Status</label>
                            <select name="status" class="form-control" id="exampleInputEmail1">
                                <option value="0" @if($order->status==0) checked @endif>chưa xử lý
                                </option>
                                <option value="1" @if($order->status==1) checked @endif>Đã xử lý
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
