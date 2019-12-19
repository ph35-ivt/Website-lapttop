<!doctype html>
<html>

<head>
    <title>Thay đổi thông tin</title>

    <base href="{{asset('')}}">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="user/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="user/css/dangki.css" rel='stylesheet' type='text/css' media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- /css -->
</head>

<body>
<div class="wrap">
        @include('layout.header_user')
</div>
 <div class="main">
     <div class="content">
   <h1 style="font-size: 40px;text-align: center;padding: 20px;color: red;font-weight: bold;">Thông tin thành viên</h1>
    <div class="content-w3ls">
        <div class="content-agile1">
            <h2 class="agileits1">Users</h2>
            <p class="agileits2">Thông tin thành viên</p>
        </div>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors ->all() as $err) {{$err}} @endforeach
        </div>
        @endif @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
        @endif
        <div class="content-agile2">
            <form action="nguoidung" method="POST">
                @csrf
                <div class="form-control w3layouts">
                    <input type="text" name="name" value="{{$user->name}}" id="firstname" placeholder="Tên tài khoản" required="">
                </div>

                <div class="form-control w3layouts">
                    <input type="email" id="email" value=" {{$user->email}}" name="email" placeholder="Đăng nhập email" title="email" readonly="">
                </div>

                <div class="form-control agileinfo">
                    <input type="password" class="lock" value=" {{$user->password}}" name="password" placeholder="Password" id="password1" required="">
                </div>

                <div class="form-control agileinfo">
                    <input type="password" class="lock" value=" {{$user->password}}" name="confirm_password" placeholder="Đăng nhập lại password" id="password2" required="">
                </div>

                <input type="submit" class="register" value="Thay đổi thông tin">
            </form>
            <script type="text/javascript">
                window.onload = function() {
                    document.getElementById("password1").onchange = validatePassword;
                    document.getElementById("password2").onchange = validatePassword;
                }

                function validatePassword() {
                    var pass2 = document.getElementById("password2").value;
                    var pass1 = document.getElementById("password1").value;
                    if (pass1 != pass2)
                        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                    else
                        document.getElementById("password2").setCustomValidity('');
                    //empty string means no validation error
                }
            </script>
            <ul class="social-agileinfo wthree2">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
  @include('layout.section') 
  @include('layout.footer')
</body>

</html>