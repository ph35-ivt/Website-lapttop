@extends('layout.index')
@section('css')
  <style type="text/css">
        .back-links {
            width: 150px;
            height: 30px;
        }

        form{

            width: 500px;
            margin: 0 auto;
        }
         h2,h1 {
            font-family: 'Gelasio', serif !important;
            font-family: 'Vollkorn', serif !important;
        }
         h1{
            margin-top: 40px;
            color: red;
            text-align: center;
            font-size: 25px;
        }
        button {
            margin-left: 200px;
        }
    </style>
 @endsection
 @section('content')
  @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors ->all() as $err) 
                {{$err}} <br>
                @endforeach
            </div>
  @endif 
  <form action="dangki" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
                <h1>ĐĂNG KÍ THÀNH VIÊN :</h1>
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
         <button type="submit" class="btn btn-danger"> ĐĂNG KÍ </button>
    </form>
 @endsection