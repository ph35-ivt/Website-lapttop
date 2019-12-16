<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p>Gọi: <span class="number">0386556593</span></span>
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
            <p> <span class="glyphicon glyphicon-shopping-cart">:( @if(Session::has('cart')){{Session('cart')->totalQty}}
	  	   @else Trống @endif)  </span>
            <div id="dd" class="wrapper-dropdown-2">
                <ul class="dropdown" style="background: white">
                    <br>
                    <button class="btn btn-success" style="margin-left: 40px">Đặt hàng
                        <a href="dathang" class="glyphicon glyphicon-triangle-right"></a>
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
        <div class="search_box">
            <form action="{{route('timkiem')}}" method="GET">
                @csrf
                <input type="text" name="timkiem" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>