<!DOCTYPE HTML>

<head>
    <title>Enter Laptop </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
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
        @include('layout.header_user')
    </div>
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="back-links">
                    <p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('repair')}}">Sửa laptop</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <div class="product-details">
                        <h2 style="color: red">Sửa laptop</h2>
                        <hr>
                        <?php $i= 0 ?>
                            @foreach($repair as $pt)
                            <div class="desc span_3_of_3">

                                <h2 style="color: black">{{$pt->id}}.{{$pt->title}}</h2>
                                <p><img src="{{$pt->link}}" alt=""></p>
                                <p>Posted on: {{$pt->created_at}}</p>
                                <p> {{$pt->content}}</p>
                                <br>
                                <a class="btn btn-primary" href="">Xem thêm >></a>
                                <hr>

                            </div>
                            @endforeach
                            <div class="content-pagenation" style="text-align: center;">

                                {!! $repair->fragment('foo')->links() !!}

                            </div>
                            <div class="clear"></div>
                    </div>

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
                        <div class="grid_1_of_4 images_1_of_4" style="width: 175px ;height: 350px">
                            <div class="price" style="border:none">
                                <a href="preview.html"><img src="{{$pt->link}}" alt="" /></a>
                                <h2>{{$pt->name}}</h2>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">Giá:{{number_format($pt->price)}} ₫</span></p>
                                    </div>
                                    <div class="add-cart">
                                        <h4><a href="giohang/{{$pt->id}}/{{$pt->product_slug}}.html" class="">Thêm giỏ hàng</a></h4>
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
                        <li><a href="#">{{$ct->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layout.section')
     @include('layout.footer')
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
   
</body>

</html>