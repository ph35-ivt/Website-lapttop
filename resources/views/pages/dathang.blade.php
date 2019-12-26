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
                    <p><a href="{{route('dathang')}}">Home</a> >><a href="{{route('dathang')}}">Đặt hàng</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content_bottom">
                <div class="heading">
                    <h3>Đặt hàng</h3>
                </div>
                <div class="clear"></div>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors ->all() as $err) 
                {{$err}} <br>
                 @endforeach
            </div>
            @endif 
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif 
            @if(Auth::check())
            <div class="section group">
                <form action="{{route('postdathang')}}" method="POST" id="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <br>
                            <div class="form-group">
                                <label for="name">Họ tên <span style="color:red">*</span>: </label>
                                <input type="text" class="form-control" value="{{$users->name}}" name="name" id="name" placeholder="Họ tên" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span style="color:red">*</span>:</label>
                                <input type="email" class="form-control" value="{{$users->email}}" name="email" id="email" placeholder="expample@gmail.com" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="phone">Điện thoại <span style="color:red">*</span>:</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="phone">Address <span style="color:red">*</span>:</label>
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="your-order">
                                <div class="your-order-head">
                                    <h5>Đơn hàng của bạn</h5></div>
                                <div class="your-order-body" style="padding: 0px 10px">
                                    <div class="your-order-item">
                                        <div>
                                            @if(Session::has('cart')) @foreach($product_cart as $pt)
                                            <!--  one item	 -->
                                            <div class="media">
                                                <img width="20%" src="{{$pt['item']['link']}}" alt="" class="pull-left">
                                                <div class="media-body">
                                                    <table width="350px" height="100px">
                                                        <tr>
                                                            <td>{{$pt['item']['name']}}</td>
                                                            <td>
                                                                <a style="float: right;" href="{{route('delcart',$pt['item']['id'])}}" id="success" class=" glyphicon glyphicon-trash "></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label for="">Số lượng:</label>
                                                            </td>
                                                            <td>
                                                                <a onclick="ChangeQuantity({{$pt['item']['id']}})" style="margin-right: 10px" href="javascript:void(0)" class="glyphicon glyphicon-plus-sign"></a>

                                                                <input id="Quantity-{{$pt['item']['id']}}" type="number" value="{{$pt['qty']}}" min=1 onchange="" style="width: 50px">
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">Đơn giá: {{number_format($pt['item']['price'])}} Đồng</td>
                                                        </tr>
                                                    </table>

                                                </div>
                                            </div>
                                            @endforeach @endif
                                            <!-- end one item -->
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="your-order-item">
                                        @if(Session::has('cart'))
                                        <div class="pull-left">
                                            <p class="your-order-f18"><b>Tổng tiền:</b></p>
                                        </div>
                                        <div class="pull-right">
                                            <h5 class="color-black">{{number_format(Session('cart')->totalPrice)}} Đồng</h5></div>
                                        <div class="clearfix"></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="your-order-head">
                                    <h5>Hình thức thanh toán</h5></div>

                                <div class="your-order-body">
                                    <ul class="payment_methods methods">
                                        <li class="payment_method_bacs">

                                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="0" checked="checked" data-order_button_text="">
                                            <label for="payment_method_bacs">Tiền mặt</label>
                                            
                                        </li>

                                        <li class="payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="1" data-order_button_text="">
                                            <label for="payment_method_cheque">Tính tiền bằng thẻ </label>
                                            <div class="payment_box payment_method_cheque" style="display: none;">
                                                Chuyển tiền đến tài khoản sau:
                                                <br>- Số tài khoản: 123 456 789
                                                <br>- Chủ TK: Nguyễn A
                                                <br>- Ngân hàng ACB, Chi nhánh TPHCM
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-success"> Đặt hàng <i class="glyphicon glyphicon-chevron-right"></i></button>
                                </div>
                            </div>
                            <!-- .your-order -->
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="section group">
                <br>
                
                <div class="col-sm-4" style="margin-left: 50px">
                    <h2 style="font-weight: bold;color: green; text-align: center;">Đăng nhập</h2>
                    <p style="color:red" >Bạn cần đăng nhập mới đặt hàng được:</p>
                    <br>
                    <form method="POST" action="{{route('postdangnhap')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="name">Email <span style="color:red">*</span>: </label>
                            <input type="email" class="form-control" name="email" placeholder="nhập email">
                        </div>
                        <div class="form-group">
                            <label>Password <span style="color:red">*</span>:</label>
                            <input type="password" class="form-control" name="password" placeholder="nhập pass">
                        </div>
                        <button type="submit" class="btn btn-outline-success">Đăng nhập</button>
                    </form>
                </div>
                  <div class="col-sm-2">
                       <button  class="btn btn-warning" style="margin-left: 50px;margin-top: 100px">Hoặc</button>
                  </div>
                  <div class="col-sm-4" >
                    <h2 style="font-weight: bold;color: green; text-align: center;">Đăng kí thành viên</h2>
                    <p style="color:red" >Bạn cần đăng nhập mới đặt hàng được:</p>
                    <br>
                    <form method="POST" action="{{route('dangki')}}">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <div class="form-group">
                            <label>Tên <span style="color: red">*</span>:</label> 
                            <br>
                            <input type="text" class="form-control"  name ="name" placeholder="Tên của bạn" required name="">
                       </div>
                       <div class="form-group">
                            <label>Email <span style="color: red">*</span>:</label><br>
                            <input type="email" class="form-control" name="email" placeholder="Email của bạn" required name="">
                        </div>
                        <div class="form-group">
                           <label>Mật khẩu <span style="color: red">*</span>:</label><br>
                           <input type="password" class="form-control" name ="password" placeholder="Password của bạn" required name="">
                        </div>
                         <div class="form-group">
                           <label>Nhập lại mật khẩu <span style="color: red">*</span>:</label><br>
                           <input type="password" class="form-control" name="passwordAgain"  placeholder="Password của bạn" required name="">
                        </div>
                        <button type="submit" class="btn btn-outline-success">Đăng kí </button>
                    </form>
                </div>
            </div>

            @endif

        </div>

    </div>
@endsection

    
   