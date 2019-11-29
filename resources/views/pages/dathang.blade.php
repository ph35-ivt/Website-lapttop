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
<style type="text/css">
	form{
          width: 900px;
          margin-left: 50px;
	}
</style>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
  <div class="wrap">
    @include('layout.header')
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('dathang')}}">Đặt hàng</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>   	
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Đặt hàng</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
 <div class="section group">
   <form action="{{route('postdathang')}}" method="POST" id="form" >
				<div class="row">
					<div class="col-sm-6">
						<br>
						<div class="form-group">
							<label for="name" >Họ tên: </label>
							<input type="text" class="form-control" id="name" placeholder="Họ tên" required>
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" id="email" required placeholder="expample@gmail.com">
						</div>

						<!-- <div class="form-group">
							<label for="adress">Địa chỉ:</label>
							<input type="text" class="form-control" id="adress" placeholder="Street Address" required>
						</div>
						 -->

						<div class="form-group">
							<label for="phone">Điện thoại:</label>
							<input type="text" class="form-control" id="phone" required>
						</div>
						
						<!-- <div class="form-group">
							<label for="notes">Ghi chú</label>
							<textarea id="notes" class="form-control"></textarea>
						</div> -->
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="user/images/slider/shoping1.jpg" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large">Men's Belt</p>
												<br>
												<span class="color-gray your-order-info">Color: Red</span>
												<span class="color-gray your-order-info">Size: M</span>
												<span class="color-gray your-order-info">Qty: 1</span>
											</div>
										</div>
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">$235.00</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><a class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></a></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>  	         
				
 </div>
				
 </div>
			 
        </div>
			
        </div>
 		</div>
 	</div>
    </div>
 </div>
  @include('layout.footer')
   <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

