<!DOCTYPE HTML>

<head>
    <title>Enter Laptop </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                    <h3><a href="sanpham/{{$categories->id}}/{{$categories->category_slug}}.html" class="glyphicon glyphicon-apple"></a>{{$categories->name}}</h3>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                @foreach($sanpham as $sp)
                <div class="grid_1_of_4 images_1_of_4"  style="width: 25%px;height: 430px">
                    <div class="price" style="border:none">
                        <a href="preview.html"><img src="{{asset($sp->link)}}" alt="" /></a>
                        <h2>{{$sp->name}}</h2>
                        <div class="price-details">
                            <div class="price-number">
                                <p><span class="rupees">Giá: {{number_format($sp->price)}} ₫</span></p>
                            </div>
                            <div class="add-cart" style="margin-right: 50px">
                                <a href="{{route('addcart',$sp->id)}}"  class="glyphicon glyphicon-shopping-cart"></a> 
                                <a href="giohang/{{$sp->id}}/{{$sp->product_slug}}.html" style="padding: 30px" class="glyphicon glyphicon-list"></a>
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
    @include('layout.section')
    @include('layout.footer')
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>

</html>