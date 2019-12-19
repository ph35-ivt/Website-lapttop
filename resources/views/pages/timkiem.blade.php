<!DOCTYPE HTML>

<head>
    <title>Enter Laptop </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="user/js/Typeahead.js">
    <link href="user/css/bootstrap.min.css" rel="stylesheet">
    <link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="user/css/shop-homepage.css" rel="stylesheet">
    <link href="user/css/my.css" rel="stylesheet">
    <link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
        <div class="header">
            <div class="headertop_desc">
                <div class="call">
                    <p><span>Need help?</span> call us <span class="number">0386556593</span></span>
                    </p>
                </div>
                <div class="account_desc">
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                    @endif
                    <ul class="nav navbar-nav pull-right">
                        @if(Auth::check())
                        <li>
                            <a href="nguoidung">
                                <span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}}
                            </a>
                        </li>

                        <li>
                            <a href="dangxuat">Đăng xuất</a>
                        </li>

                        @else
                        <li>
                            <a href="dangki">Đăng ký</a>
                        </li>
                        <li>
                            <a href="dangnhap">Đăng nhập</a>
                        </li>

                        @endif

                    </ul>

                </div>
                <div class="clear"></div>
            </div>
            <div class="header_top">
                <div class="logo">
                    <a href="index.html"><img width="150px" src="user/images/logo1.png" alt="" /></a>
                </div>

                <div class="cart">
                    <p> <span class="glyphicon glyphicon-shopping-cart">Giỏhàng: ( @if(Session::has('cart')){{Session('cart')->totalQty}}
	  	         @else Trống @endif)  </span>
                        <div id="dd" class="wrapper-dropdown-2">
                            <ul class="dropdown" style="background: white">
                                <br>
                                <button class="btn btn-success" style="margin-left: 40px">Đặt hàng
                                    <a href="dathang" class="glyphicon glyphicon-triangle-right "></a>
                                </button>
                            </ul>
                        </div>

                </div>

                <div class="clear"></div>
            </div>
            <div class="header_bottom">
                <div class="menu">
                    <ul>
                        <li class="active"><a href="{{route('trangchu')}}">Trang chủ</a></li>
                        <li><a href="{{route('lap_gioithieu')}}">Giới thiệu</a></li>
                        <li><a href="{{route('repair')}}">Sửa Laptop</a></li>
                        <li><a href="{{route('tintuc')}}">Tin tức</a></li>
                        <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="search_box the-basic">
                    <form action="{{route('timkiem')}}" method="GET">
                        @csrf
                        <input type="text" name="search" class="typeahead" autocomplete="off" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="main">
                <div class="content">
                    <div class="content_top">
                        <div class="back-links">
                            <p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('tintuc')}}">Tìm kiếm</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="content_bottom">
                        <div class="heading">
                            <h3>Tìm kiếm</h3>
                            <br>
                            <p>Tìm thấy: {{count($timkiem)}} sản phẩm </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="section group">
                        @foreach($timkiem as $tk)
                        <div class="grid_1_of_4 images_1_of_4" style="width: 224px;height: 416px">
                            <div class="price" style="border:none">
                                <a href="preview.html"><img src="{{asset($tk->link)}}" width="400px" height="200px" alt="" /></a>
                                <h2>{{$tk->name}}</h2>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">Giá: {{number_format($tk->price)}} ₫</span></p>
                                    </div>
                                    <div class="add-cart">
                                        <a href="{{route('addcart',$tk->id)}}" class="glyphicon glyphicon-shopping-cart"></a>
                                        <a href="giohang/{{$tk->id}}/{{$tk->product_slug}}.html" style="padding: 30px" class="glyphicon glyphicon-list"></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        @endforeach
                   </div>
                    <div class="content-pagenation" style="text-align: center;">

                         {!! $timkiem->appends($_GET)->links() !!}

                    </div>
              
                </div>
            </div>
            @include('layout.section') 
            @include('layout.footer')
            <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>

</html>