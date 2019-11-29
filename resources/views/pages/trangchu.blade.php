 @extends('layout.index')
 @section('content')
 <div class="main">
 	<div class="content">
 		@foreach($categories as $ct) 	
 		<div class="content_top">
 			<div class="heading">
 				<h3>{{$ct->name}}</h3>
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
 			<div class="grid_1_of_4 images_1_of_4">
 				<a href="giohang/{{$pt->id}}/{{$pt->product_slug}}.html"><img width="400px" height="250px" src="{{asset($pt->link)}}" alt="" /></a>
 				<h2>{{$pt->name}}</h2>
 				<div class="price-details">
 					<div class="price-number">
 						<p><span class="rupees">{{number_format($pt->price)}} Đ</span></p>
 					</div>
 					<div class="add-cart" > 							
 						<h4><a href="giohang/{{$pt->id}}/{{$pt->product_slug}}.html">Chi tiết sp </a></h4>
 					</div>
 					<div class="add-cart">  							
 						<h4 ><a href="{{route('addcart',$pt->id)}}" class="" >Giỏ hàng</a></h4>
 					</div>
 					<div class="clear"></div>
 				</div>	 
 			</div>
 			@endif
 			@endforeach
 		</div>
 		<div class="content_right" style="text-align: right;"><a class="btn btn-danger" href="sanpham/{{$ct->id}}/{{$ct->category_slug}}.html">Xem thêm >></a></div>

 		@endforeach

 	</div>
 </div>



 @endsection