 @extends('layout.index')
 @section('link')
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 @endsection
 @section('css')
   <style type="text/css" media="screen">
       h2,h4 {
            font-family: 'Gelasio', serif !important;
            font-family: 'Vollkorn', serif !important;
        }
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
        #search form {
            margin-left: 140px;
        }
         #search form h2{
            margin-left:  300px;
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
@endsection
@section('header')
      @include('layout.slider')
      @include('layout.nav')
@endsection
@section('content')
   
 <div class="main">
 	<div class="content">
         <div id="search">
                    <form method="GET"  action="{{route('timkiemdanhmuc')}}">
                     <h2 style="">Tìm kiếm theo danh mục:</h2> 
                     <table  width="870px" style="text-align: center; ">
                         <tr>
                             <td> <div class="checkbox">
                                    <label><input  name="category_id[]" type="checkbox" value="1">Dell</label>
                                   </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <label><input  name="category_id[]" type="checkbox" value="2">Asus</label>
                                   </div>
                            </td>
                            <td>
                                  <div class="checkbox ">
                                  <label><input  name="category_id[]"  type="checkbox" value="3" >Gamming</label>
                                  </div>
                            </td>
                             <td> <div class="checkbox">
                                    <label><input  name="category_id[]" type="checkbox" value="4">Macbook</label>
                                   </div>
                            </td>
                             <td> <div class="checkbox">
                                    <label><input  name="category_id[]" type="checkbox" value="5">Acer</label>
                                   </div>
                            </td>
                            <td>
                                <div class="checkbox">
                                    <label><input  name="category_id[]" type="checkbox" value="6">Hp</label>
                                   </div>
                            </td>
                            <td>
                                  <div class="checkbox ">
                                  <label><input  name="category_id[]" type="checkbox" value="7" >Lenovo</label>
                                  </div>
                            </td>
                         </tr>
                     </table>
                      <button type="submit" class="btn btn-info" style="margin-left: 400px;margin-top: 10px; margin-bottom: 20px">Chọn</button>  
                        <br>
                    <div class="clear"></div>
                  
                   </form>
                   
                    <div class="clear"></div>
                </div>
 		@foreach($categories as $ct) 	
 		<div class="content_top">
 			<div class="heading">
 				<h3><a href="sanpham/{{$ct->id}}/{{$ct->slug}}.html" class="glyphicon glyphicon-apple"></a>{{$ct->name}}</h3>
 			</div>

 			<div class="clear"></div>
 		</div>

 		<div class="section group">
 			@php
 			$count = 0;
 			@endphp
 			@foreach($product as $pt)
 			@if($pt->category_id == $ct->id && $count < 4)
 			@php
 			$count++;
 			@endphp
 			<div class="grid_1_of_4 images_1_of_4" style="width: 25%px;height: 450px">
 				<div class="container">
 				<a href="giohang/{{$pt->id}}/{{$pt->slug}}.html" ><img width="400px" height="250px" src="{{asset($pt->link)}}" alt="" /></a>
 				<div class="overlay">
			    <div class="text">Sản phẩm mới
			    </div>
			  </div>
 			</div>
 				<h2 >{{$pt->name}}</h2>
 				<div class="price-details">
 					<div class="price-number">
 						<p><span class="rupees">Giá:  {{number_format($pt->price)}} Đ</span></p>
 					</div>
 					<br>	
 					<div class="clear"></div>
 				</div>	
 				<a href="{{route('addcart',$pt->id)}}"  class="glyphicon glyphicon-shopping-cart"></a> 
 				<a href="giohang/{{$pt->id}}/{{$pt->slug}}.html" style="padding: 30px" class="glyphicon glyphicon-list"></a>
 			</div>
 			@endif
 			@endforeach
 		</div>
 		<a href="sanpham/{{$ct->id}}/{{$ct->slug}}.html" class="glyphicon glyphicon-fast-forward" style="float: right;"></a>
        <br>
 		@endforeach

 	</div>
 </div>

@if(session('thongbaodangkythanhcong'))
    <script type="text/javascript">
        alert("Đăng ký thành công");
    </script>
 @endif 
 @if(session('thongbaosuathanhcong'))
    <script type="text/javascript">
        alert("Bạn đã sửa thành công");
    </script>
 @endif 
 
 @endsection