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
				<i class="fa fa-usd" aria-hidden="true"></i>
			</div>
			<div class="col-md-8 market-update-left">
				<h4>Sales</h4>
				<h3>1,500</h3>
				<p>Other hand, we denounce</p>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
   <div class="clearfix"> </div>
</div>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">New Order</div>
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

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $od)
			<tr>
				<td>1</td>
				<td>{{$od->name}}</td>
				<td>{{$od->created_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection