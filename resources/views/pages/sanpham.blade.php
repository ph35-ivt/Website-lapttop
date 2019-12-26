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
                                    <a href="giohang/{{$sp->id}}/{{$sp->slug}}.html" style="padding: 30px" class="glyphicon glyphicon-list"></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            <div class="content-pagenation" style="text-align: center;margin:  0 auto">

                {!! $sanpham->fragment('foo')->links() !!}

            </div>
        </div>
    </div>
@endsection
    