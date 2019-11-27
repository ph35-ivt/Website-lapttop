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
    		<p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('tintuc')}}">Sản phẩm</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>   	
   <div class="content_bottom">
    		<div class="heading">
    		<h3>{{$categories->name}}</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
   <div class="section group">
   	          @foreach($sanpham as $sp)
				<div class="grid_1_of_4 images_1_of_4">				
					<div class="price" style="border:none">
			       		<a href="preview.html"><img src="{{asset($sp->link)}}" alt="" /></a>
							<h2>{{$sp->name}}</h2>
							<div class="price-details">
	 					<div class="price-number">
	 						<p><span class="rupees">{{number_format($sp->price)}} ₫</span></p>
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
			 <div class="content-pagenation" style="text-align: center;">
					
                    {!! $sanpham->fragment('foo')->links() !!}

               
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

