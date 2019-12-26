@extends('layout.index')
@section('css')
  <style type="text/css">
        .back-links {
            width: 150px;
            height: 30px;
        }

         h2,h1,h4 {
            font-family: 'Gelasio', serif !important;
            font-family: 'Vollkorn', serif !important;
        }
    </style>
 @endsection
 @section('content')
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="back-links">
                    <p><a href="{{route('trangchu')}}">Home</a> >> <a href="{{route('giohang')}}">Chi tiết sản phẩm</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <div class="product-details">
                        <div class="grid images_3_of_2">
                            <div id="container">
                                <div id="products_example">
                                    <a href="{{route('giohang')}}" target="_blank"><img width="300px; height=200px " src="{{asset($pt->link)}}"  alt=" " /></a>
                                </div>
                            </div>
                        </div>
                        <div class="desc span_3_of_2">
                            <h2>{{$pt->name}} </h2>
                            <br>
                            <hr>
                            <div class="price">
                                <p>Giá: <span> {{number_format($pt->price)}} Đồng</span></p>
                                <p style="font-size: 17px; font-weight: bold;"><img width="30px" height="30px" src="user/images/logo/tik.png">Còn hàng</p>
                            </div>
                            <div class="share-desc">
                                <div class="share">
                                    <p>Share Product :</p>
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/"><img src="user/images/facebook.png" alt="" /></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/"><img src="user/images/twitter.png" alt="" /></a>
                                        </li>
                                    </ul>
                                </div>
                                <br>
                                <div class="button"><span><a href="{{route('addcart',$pt->id)}}">Thêm giỏ hàng</a></span></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="product_desc">
                        <div id="horizontalTab">
                            <!-- <ul class="resp-tabs-list">
                                <li>Thông số kỹ thuật</li>
                                <li>Gói bảo hành</li>
                                <li>Cam kết</li>
                                <div class="clear"></div>
                            </ul> -->
                            <div class="resp-tabs-container">
                                <div class="product-desc">
                                    <h1 style="font-size: 20px">
					                   	1. THÔNG SỐ KỸ THUẬT :</h1>
                                    <p>{{$pt->content}}</p>
                                </div>
                                <div class="product-desc">
                                    <h1 style="font-size: 20px">
					                   	2. GÓI BẢO HÀNH :</h1>
                                    <br>
                                    <a href=""><img width="724px" height="300px" src="user/images/product/goibh.png" alt=""></a>
                                </div>
                                <div class="product-desc">
                                    <h1 style="font-size: 20px">
						                  3. CAM KẾT:</h1>
                                    <br>
                                    <a href=""><img style="margin-left: 100px" width="500px" height="300px" src="user/images/product/CAM-KET.png" alt=""></a>
                                </div>
                                <div class="review">
                                    <div class="contact-form">
                                        <h2>Bình luận</h2> @if(session('thongbao')) {{ session('thongbao') }} @endif
                                        <form action="comment/{{$pt->id}}" method="POST">
                                            @csrf
                                            <div>
                                                <span><label>Name *:</label></span>
                                                <span><input type="text" name="cm_name" class="textbox" ></span>
                                            </div>
                                            <div>
                                                <span><label>E-mail *:</label></span>
                                                <span><input type="text" name="cm_email" class="textbox"></span>
                                            </div>
                                            <div>
                                                <span><label>Nội Dung *:</label></span>
                                                <span><textarea name="content"> </textarea></span>
                                            </div>
                                            <div>
                                                <span><input type="submit" value="Phản hồi" ></span>
                                            </div>
                                        </form>
                                    </div>
                                    <hr> @foreach($comment as $cm)
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" style="width: 60px" src="user/images/slider/dangnhap.png" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                           <b>{{$cm->cm_name}}</b>
                                             <small>Datetime: {{$cm->created_at}}</small>
                                            </h4> {{$cm->content}}

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
                        <div class="grid_1_of_4 images_1_of_4" style="width: 150px ;height: 340px">
                            <div class="price" style="border:none">
                                <a href="preview.html"><img src="{{$pt->link}}" alt="" /></a>
                                <h2>{{$pt->name}}</h2>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">{{number_format($pt->price)}} ₫</span></p>
                                    </div>
                                    <div class="add-cart">
                                        <h4><a href="{{route('giohang')}}}">Thêm giỏ hàng</a></h4>
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
                        <li><a href="sanpham/{{$ct->id}}/{{$ct->slug}}.html">{{$ct->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
 