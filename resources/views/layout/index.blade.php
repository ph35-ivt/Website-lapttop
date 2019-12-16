<!DOCTYPE HTML>
<head>
<title>Enter Laptop </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<base href="{{asset('')}}">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link href="user/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="user/css/my.css" rel="stylesheet">
<!-- Semantic UI theme -->
<!--  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Semantic UI theme -->
<script type="text/javascript" src="user/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="user/js/move-top.js"></script>
<script type="text/javascript" src="user/js/easing.js"></script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css" media="screen">
       .navbar {
        max-height: 100px;
        margin-left: 70px;
        text-align: center;

      }
      .container {
        position: relative;
        width: 100%;
      }

      .image {
        display: block;
        width: 100%;
        height: auto;
      }
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #777777;
            overflow: hidden;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }
        
        .container:hover .overlay {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
        
        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .col-md-3 {
            display: inline-block;
            margin-left: -4px;
        }
        
        .col-md-3 img {
            width: 100%;
            height: auto;
        }
        
        #demo {
            margin-left: 100px;
            width: 950px;
        }
        
        .carousel-control-next {
            width: 25%;

        }
    
        
        body .carousel-indicators li {
            background-color: red;
        }
        
        body .carousel-indicators {
            bottom: 0;
        }
        
        body .carousel-control-prev-icon,
        body .carousel-control-next-icon {
            background-color: red;
        }
        
        body .no-padding {
            padding-left: 0;
            padding-right: 0;
        }
        
        .header_bottom.fix {
            left: 0;
            max-width: 100%;
            overflow: visible;
            position: fixed !important;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Carousel').carousel({
                interval: 1000
            })
        });
        jQuery(document).ready(function($) {
            var $filter = $('.header_bottom');
            var $filterSpacer = $('<div />', {
                "class": "vnkings-spacer",
                "height": $filter.outerHeight()
            });
            if ($filter.size()) {
                $(window).scroll(function() {
                    if (!$filter.hasClass('fix') && $(window).scrollTop() > $filter.offset().top) {
                        $filter.before($filterSpacer);
                        $filter.addClass("fix");
                    } else if ($filter.hasClass('fix') && $(window).scrollTop() < $filterSpacer.offset().top) {
                        $filter.removeClass("fix");
                        $filterSpacer.remove();
                    }
                });
            }

        });
    </script>

    @include('layout.script')
</head>
<body>
  <div class="wrap">
     @include('layout.header')
	   @include('layout.slider')
   </div>
     @include('layout.nav')
     @yield('content')
   </div>
     @include('layout.section')
    @include('layout.footer')
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

