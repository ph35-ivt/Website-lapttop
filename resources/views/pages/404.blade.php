<!DOCTYPE HTML>
<head>
<title>Enter Laptop </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<base href="{{asset('')}}">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<link href="user/css/bootstrap.min.css" rel="stylesheet">
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="user/css/shop-homepage.css" rel="stylesheet">
<link href="user/css/my.css" rel="stylesheet">
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="user/text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="user/text/javascript" src="js/move-top.js"></script>
<script type="user/text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="user/css/global.css">
<style type="text/css">
        .back-links {
            width: 150px;
            height: 30px;
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
    		<p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('tintuc')}}">Lỗi 404</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>   	
       <div class="content_bottom">
    		<div class="heading">
    		<h3>Lỗi 404</h3>
    		<br>
    		</div>
    		<div class="clear"></div>
    	</div>
       <div class="section group" style="height: 300px">
    	        
				<div class="grid_4_of_4 images_4_of_4" style="width: 300px; margin: 0 auto; margin-top: 100px">				
					<div class="section-center" >
						<h2>KHÔNG TÌM THẤY YÊU CẦU</h2>
						<p>Xin lỗi! Trang bạn yêu cầu không tồn tại, hoặc đã được thay đổi.</p>
					<a href="{{route('trangchu')}}" class="btn btn-danger">Quay lại trang chủ</a>
					</div>
				</div>
				
		</div>	
        </div>
 		</div>
   @include('layout.section')
   @include('layout.footer')
</body>
</html>

