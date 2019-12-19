@extends('admin.main')
@section('content')

<div class="market-updates">
	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-2">
			<div class="col-md-4 market-update-right">
				<i class="fa fa-eye"> </i>
			</div>
			<div class="col-md-8 market-update-left">
			   	<h4>Products</h4>
				<h3>{{$product_count}}</h3>
				<p>Other hand, we denounce</p>
		  </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-1">
			<div class="col-md-4 market-update-right">
				<i class="fa fa-users" ></i>
			</div>
			<div class="col-md-8 market-update-left">
				<h4>Users</h4>
				<h3>{{$user_count}}</h3>
				<p>Other hand, we denounce</p>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-3">
			<div class="col-md-4 market-update-right">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="col-md-8 market-update-left">
				<h4>Orders</h4>
				<h3>{{$order_count}}</h3>
				<p>Other hand, we denounce</p>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-3 market-update-gd">
		<div class="market-update-block clr-block-4">
			<div class="col-md-4 market-update-right">
				<i class="fa fa-commenting-o" style="font-size:36px;color: #fff" aria-hidden="true"></i>
			</div>
			<div class="col-md-8 market-update-left">
				<h4>Comment</h4>
				<h3>{{$comment_count}}</h3>
				<p>Other hand, we denounce</p>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
   <div class="clearfix"> </div>
</div>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
       	New Order
    </div>
    <div class="panel-body">
		<form action="" method="GET" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="date" class="form-control" name="date_from" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<input type="date" class="form-control" name="date_to" id="" placeholder="Input field">
			</div>
		
			<button type="submit" class="btn btn-primary">Go!</button>
		</form>
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
            <th style="color: black">STT</th>
            <th style="color: black">Name</th>
            <th style="color: black">Date</th>
          </tr>
        </thead>
        <tbody>
	        @foreach($orders as $od)
	            <tr>
	              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
	              <td><span class="text-ellipsis">{{$od->id}}</span></td>
	              <td><span class="text-ellipsis">{{$od->name}}</span></td>
	              <td><span class="text-ellipsis">{{$od->created_at}}</span></td>
	            </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection