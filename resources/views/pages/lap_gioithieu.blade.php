<!DOCTYPE HTML>

<head>
    <title>Giới thiệu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="user/text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="user/text/javascript" src="js/move-top.js"></script>
    <script type="user/text/javascript" src="js/easing.js"></script>
    <!-- <script src="user/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="user/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/> -->
    <link rel="stylesheet" href="user/css/global.css">
    <!-- <script src="user/js/slides.min.jquery.js"></script> -->
    <!-- <script>
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
	</script> -->
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
                    <p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('lap_gioithieu')}}">Giới thiệu</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <div class="product-details">
                        <h2>Giới thiệu</h2>
                        <hr>
                        <div class="desc span_3_of_3">

                            <p>Cửa hàng chuyên cung cấp các dòng laptop của các thương hiệu nổi tiếng như Dell, Lenovo, Aser, Asus, Apple, Samsung :</p>
                            <br>
                            <p>
                                - Ngoài ra, cửa hàng còn cung cấp các loại linh kiện máy tính chính hãng giá rẻ như Ram, HDD, màn hình, vỏ…
                                <br> - Với thâm niên hơn 8 năm thành lập mục tiêu mang đến sản phẩm chất lượng nhất, giá tốt nhất kèm dịch vụ số 1 tại Đà Nẵng.
                                <br> - Đội ngũ nhân viên, Kĩ thuật viên chuyên nghiệp với kinh nghiệm lâu năm, kỹ năng chuyên môn được đào tạo bài bản nhằm mang đến chất lượng dịch vụ tố.t nhất cho khách hàng đến shop.
                                <br> - Các chương trình khuyến mãi liên tục trong năm hỗ trợ tối đa khách hàng mua và sửa laptop tại shop.
                                <br> - Đối với khách hàng là HSSV, người ở xa sẽ được hỗ trợ giảm giá trực tiếp trên giá sản phẩm… Và còn nhiều ưu đãi khác…

                            </p>
                             <br>
                            <img width="500px" src="user/images/tintuc/img1.jpg" alt="">
                            <br>
                            <p>Hãy ghé T&T để được trải nghiệm sản phẩm, dich vụ tốt nhất Đà Nẵng!!</p>
                            <p>Thông tin liên hệ của Laptop T&T – <a href="">Bán laptop Đà nẵng </a>:</p>
                            <p> - Địa chỉ : 11 lê văn sỹ, Tp Đà Nẵng</p>
                            <p> - Điện thoại: 0386556593</p>
                            <p> - Facebook: facebook/enterlap/09999</p>
                            <p> - Email:enterlaptop@gmail.com</p>

                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="content_bottom">
                        <div class="heading">
                            <h3>Related Products</h3>
                        </div>
                        <div class="see">
                            <p><a href="{{route('trangchu')}}">See all Products</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="section group">
                        @foreach($product1 as $pt)
                        <div class="grid_1_of_4 images_1_of_4" style="width: 130px ;height: 320px">
                            <div class="price" style="border:none">
                                <a href="preview.html"><img  src="{{$pt->link}}" alt="" /></a>
                                <h2>{{$pt->name}}</h2>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">Giá: {{number_format($pt->price)}} Đ</span></p>
                                    </div>
                                    <div class="add-cart">
                                        <h4><a href="giohang/{{$pt->id}}/{{$pt->product_slug}}.html" class="">Thêm giỏ hàng </a></h4>
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
                    <h2> CATEGORIES</h2>
                    <ul class="side-w3ls">
                        @foreach($categories as $ct)
                        <li><a href="">{{$ct->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layout.section') @include('layout.footer')
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>

</html>