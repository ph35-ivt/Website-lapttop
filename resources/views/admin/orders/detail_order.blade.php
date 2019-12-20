@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Customer Information
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Name Customer</th>
            <th>Phone</th>
            <th>Pddress</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$order->name}}</span></td>
            <td><span class="text-ellipsis">{{$order->phone}}</span></td>
            <td><span class="text-ellipsis">{{$order->address}}</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      List Order Detail
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Name Product</th>
            <th>price</th>
            <th>Quantity</th>
            <th>Total price</th>
          </tr>
        </thead>
        <tbody>
          @foreach($order->order_details as $orderDetail)
          <tr>
            <td><span class="text-ellipsis">{{$orderDetail->products->name}}</span></td>
            <td><span class="text-ellipsis">{{$orderDetail->products->price}}</span></td>
            <td><span class="text-ellipsis">{{$orderDetail->quantity}}</span></td>
            <td><span class="text-ellipsis">{{$orderDetail->price}}</span></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
