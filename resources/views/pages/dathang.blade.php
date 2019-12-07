<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Enter Laptop </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<base href="{{asset('')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="user/css/cart.css" rel="stylesheet">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link href="user/css/bootstrap.min.css" rel="stylesheet">
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="user/css/shop-homepage.css" rel="stylesheet">
<link href="user/css/my.css" rel="stylesheet">
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="user/text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="user/text/javascript" src="js/move-top.js"></script>
<script type="user/text/javascript" src="js/easing.js"></script>
<script src="user/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="user/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="user/css/global.css">
<script src="user/js/slides.min.jquery.js"></script>
<!-- <script src="user/js/my.js"></script> -->
<style type="text/css">
	form{
          width: 900px;
          margin-left: 50px;
	}
</style>

</head>
<body>
  <div class="wrap">
   	@include('layout.header_user')
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="{{route('dathang')}}">Home</a> >><a href="{{route('dathang')}}">Đặt hàng</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>   	
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Đặt hàng</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
   @if(count($errors) > 0)
     <div class="alert alert-danger">
         @foreach($errors ->all() as $err)
          {{$err}}
         @endforeach
     </div>
    @endif
    @if(session('thongbao'))
                      <div class="alert alert-success">
                          {{session('thongbao')}}
                      </div>
    @endif
     @if(Auth::check())
 <div class="section group">
   <form action="{{route('postdathang')}}" method="POST" id="form"  >
   	   			@csrf
	<div class="row">
		<div class="col-sm-6" >
			<br>
			<div class="form-group">
				<label for="name" >Họ tên <span style="color:red">*</span>: </label>
				<input type="text" class="form-control" value="{{$users->name}}" name="name" id="name" placeholder="Họ tên" readonly="" >
			</div>
			<div class="form-group">
				<label for="email">Email <span style="color:red">*</span>:</label>
				<input type="email" class="form-control" value="{{$users->email}}" name="email" id="email"  placeholder="expample@gmail.com" readonly="">
			</div> 	
			<div class="form-group">
				<label for="phone">Điện thoại <span style="color:red">*</span>:</label>
				<input type="text" class="form-control" name="phone" id="phone">
			</div>
			<div class="form-group">
				<label for="phone">Address <span style="color:red">*</span>:</label>
				<input type="text" class="form-control" name="address" id="address" >
			</div>
				<div class="form-group">
				<label for="phone">Date_order <span style="color:red">*</span>:</label>
				<input type="date" class="form-control" name="date_order"  >
			</div>
		</div>
		<div class="col-sm-6">
			<div class="your-order">
				<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
				<div class="your-order-body" style="padding: 0px 10px">
					<div class="your-order-item">								
						<div>
							@if(Session::has('cart'))
					    	@foreach($product_cart as $pt)
						<!--  one item	 -->
							<div class="media">
								<img width="20%" src="{{$pt['item']['link']}}" alt="" class="pull-left">
								<div class="media-body">
									<table width="350px" height="100px">
										<tr>
											<td>{{$pt['item']['name']}}</td>
											<td><a style="float: right;" href="{{route('delcart',$pt['item']['id'])}}" id="success" class=" glyphicon glyphicon-trash "></a>
											</td>
										</tr>
										<tr>
											<td><label for="">Số lượng:</label>
			                        			</td>
			                        			<td>
			                        				<a style="margin-right: 10px" href=" {{route('editcart',$pt['item']['id'])}}" class="glyphicon glyphicon-plus-sign"></a>
			                        			
			                        				<input type="number" value="{{$pt['qty']}}" min=1 onchange="" style="width: 50px" ><a href="{{route('delcartone',$pt['item']['id'])}}" style="margin-left: 5px" class="glyphicon glyphicon-minus-sign"></a>
			                        				</td>

			                        			
										</tr>
										<tr>
											<td colspan="2">Đơn giá: {{number_format($pt['item']['price'])}} Đồng</td>
										</tr>
									</table>
									
								</div>
							</div>
							@endforeach
							@endif
						<!-- end one item -->
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="your-order-item">
						@if(Session::has('cart'))
						<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
						<div class="pull-right"><h5 class="color-black">{{number_format(Session('cart')->totalPrice)}} Đồng</h5></div>
						<div class="clearfix"></div>
						@endif
					</div>
				</div>
				<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
				
				<div class="your-order-body">
					<ul class="payment_methods methods">
						<li class="payment_method_bacs">
						
							<input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="0" checked="checked" data-order_button_text="">
							<label for="payment_method_bacs">Tiền mặt</label>
							<div class="payment_box payment_method_bacs" style="display: block;">
								Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
							</div>						
						</li>

						<li class="payment_method_cheque">
							<input id="payment_method_cheque"  type="radio" class="input-radio" name="payment" value="1" data-order_button_text="">
							<label for="payment_method_cheque">Online </label>
							<div class="payment_box payment_method_cheque" style="display: none;">
								Chuyển tiền đến tài khoản sau:
								<br>- Số tài khoản: 123 456 789
								<br>- Chủ TK: Nguyễn A
								<br>- Ngân hàng ACB, Chi nhánh TPHCM
							</div>						
						</li>
						
					</ul>
				</div>

				<div class="text-center"><button type="submit"  class="btn btn-outline-success">  Đặt hàng <i class="glyphicon glyphicon-chevron-right"></i></button></div>
			</div> <!-- .your-order -->
		</div>
	</div>
	</form>  	         			
          </div>
        @else 
         <div class="section group">
         	        <br>		
				   <p style="color:red">Bạn cần đăng nhập mới đặt hàng được:</p>
				    <div class="col-sm-4" >
					<form method="POST" action="dangnhap">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label for="name" >Email <span style="color:red">*</span>: </label>
							<input type="email" class="form-control" name="email" placeholder="nhập email" >
						</div>
						<div class="form-group">
							<label>Password <span style="color:red">*</span>:</label>
							<input type="password" class="form-control"  name="password" placeholder="nhập pass">
						</div> 	
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
					</form>
					</div>
         </div>

        @endif
				
 </div>
			 
        </div>
			
        </div>
 		</div>
 	</div>
    </div>
 </div>
  @include('layout.footer')
  <!--  <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script> -->
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

