 @extends('layout.index')
 @section('content')
 <div class="main">
 	<div class="content">
 		@foreach($categories as $ct) 	
 		<div class="content_top">
 			<div class="heading">
 				<h3><a href="sanpham/{{$ct->id}}/{{$ct->category_slug}}.html" class="glyphicon glyphicon-apple"></a>{{$ct->name}}</h3>
 			</div>

 			<div class="clear"></div>
 		</div>
 		<div class="section group">
 			@php
 			$count = 0;
 			@endphp
 			@foreach($product as $pt)
 			@if($pt->category_id == $ct->id && $count < 4)
 			@php
 			$count++;
 			@endphp
 			<div class="grid_1_of_4 images_1_of_4" style="width: 25%px;height: 430px">
 				<div class="container">
 				<a href="giohang/{{$pt->id}}/{{$pt->product_slug}}.html" ><img width="400px" height="250px" src="{{asset($pt->link)}}" alt="" /></a>
 				<div class="overlay">
			    <div class="text">Sản phẩm mới
			    </div>
			  </div>
 			</div>
 				<h2 >{{$pt->name}}</h2>
 				<div class="price-details">
 					<div class="price-number">
 						<p><span class="rupees">Giá:  {{number_format($pt->price)}} Đ</span></p>
 					</div>
 					<br>	
 					<div class="clear"></div>
 				</div>	
 				<a href="{{route('addcart',$pt->id)}}"  class="glyphicon glyphicon-shopping-cart"></a> 
 				<a href="giohang/{{$pt->id}}/{{$pt->product_slug}}.html" style="padding: 30px" class="glyphicon glyphicon-list"></a>
 			</div>
 			@endif
 			@endforeach
 		</div>
 		<a href="sanpham/{{$ct->id}}/{{$ct->category_slug}}.html" class="glyphicon glyphicon-fast-forward" style="float: right;"></a>
        <br>
 		@endforeach

 	</div>
 </div>



 @endsection