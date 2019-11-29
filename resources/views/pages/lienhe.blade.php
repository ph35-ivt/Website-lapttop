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
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="user/text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="user/text/javascript" src="js/move-top.js"></script>
<script type="user/text/javascript" src="js/easing.js"></script>
<script src="user/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="user/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="user/css/global.css">
<script src="user/js/slides.min.jquery.js"></script>
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
    		<p><a href="{{route('trangchu')}}">Home</a> >>>> <a href="{{route('lienhe')}}">Liên hệ</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">	
				  <h2 style="color: red">Liên hệ :</h2>
				  <hr>								
				<div class="desc span_3_of_3">
					 <p>Thông tin liên hệ của Laptop T&T – <a href="">Bán laptop Đà nẵng </a>:</p>
                    <p> - Địa chỉ : 11 lê văn sỹ, Tp Đà Nẵng</p>
                    <p> - Điện thoại: 0386556593</p>
                    <p> - Facebook: facebook/enterlap/09999</p>
                    <p> - Email:enterlaptop@gmail.com</p>						
			</div>
			<div class="clear"></div>
		  </div>
	
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
   <div class="section group">
		 @foreach($product1 as $pt)
				<div class="grid_1_of_4 images_1_of_4">				
					<div class="price" style="border:none">
			       		<a href="preview.html"><img src="{{$pt->link}}" alt="" /></a>
							<h2>{{$pt->name}}</h2>
							<div class="price-details">
	 					<div class="price-number">
	 						<p><span class="rupees">{{number_format($pt->price)}} ₫</span></p>
	 					</div>
	 					<div class="add-cart">								
	 						<h4><a href="{{route('giohang')}}}">Add to Cart</a></h4>
	 					</div>
	 					<div class="clear"></div>
 				     </div>	 
							 <div class="clear"></div>
					</div>
				</div>
		  @endforeach
			
			</div>
        </div>
	<div class="rightsidebar span_3_of_1">
		<h2>CATEGORIES</h2>
		<ul class="side-w3ls">
	     @foreach($categories as $ct)
	      <li><a href="sanpham/{{$ct->id}}/{{$ct->category_slug}}.html">{{$ct->name}}</a></li>
	      @endforeach
		</ul>
		<div class="subscribe">
			<h2>Đăng nhập</h2>
			    <div class="signup">
				    <form method="POST" action="{{route('dangnhap')}}}">
				     <input type="hidden" name="_token" value="{{csrf_token()}}">
				    	<input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">
				    	
				    </form>
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

