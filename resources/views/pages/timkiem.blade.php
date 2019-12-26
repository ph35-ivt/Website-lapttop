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
                    <p><a href="{{route('trangchu')}}">Home</a> >><a href="{{route('tintuc')}}">Tìm kiếm</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content_bottom">
                   <table width="870px" style="text-align: center; ">
                   </table>
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
                                    <a href="giohang/{{$tk->id}}/{{$tk->slug}}.html" style="padding: 30px" class="glyphicon glyphicon-list"></a>
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

@endsection

