@extends('layout.index')
@section('css')
  <style type="text/css">
        .back-links {
            width: 150px;
            height: 30px;
        }
         h2 {
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
                    <p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('tintuc')}}">Tin tức</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="cont-desc span_1_of_2">
                    <div class="product-details">
                        <h2 style="color: red">Tin tức</h2>
                        <hr>
                            @foreach($tintuc1 as $tt)
                            <div class="desc span_3_of_3">

                                <h2 style="color: black">{{$tt->id}}.{{$tt->title}}</h2>
                                <p><img src="{{asset($tt->link)}}" alt=""></p>
                                <p class="far fa-clock"> Posted on: {{$tt->created_at}}</p>
                                <p> {{$tt->content}}</p>
                                <br>
                                <a class="btn btn-primary" href="">Xem thêm >></a>
                                <hr>

                            </div>
                            @endforeach
                            <div class="desc span_3_of_3" style="text-align: center;">

                                {!! $tintuc1->fragment('foo')->links() !!}

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
                        <div class="grid_1_of_4 images_1_of_4" style="width: 150px ;height: 340px">
                            <div class="price" style="border:none">
                                <a href="preview.html"><img src="{{$pt->link}}" alt="" /></a>
                                <h2>{{$pt->name}}</h2>
                                <div class="price-details">
                                    <div class="price-number">
                                        <p><span class="rupees">Giá:{{number_format($pt->price)}}₫</span></p>
                                    </div>
                                    <div class="add-cart">
                                        <h4><a href="giohang/{{$pt->id}}/{{$pt->slug}}.html" class="">Thêm giỏ hàng</a></h4>
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