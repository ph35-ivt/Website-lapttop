<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Shop Phụ kiện Game - Máy tính online</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Thương hiệu</a>
                    <!--  <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="80px"></a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--   <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Link</a></li> -->
                        <!--  <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li> -->
                    </ul>
                    <!--  <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			      </form> -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Đăng nhập</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đăng ký <!-- <span class="caret"></span> --></a>
                            <!--  <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul> -->
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!--------------------------Kết thúc End Top Bar----------------------------------->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/GodOfWar_Slider.jpg" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="images/GodOfWar_Slider.jpg" alt="Chicago">
                </div>

                <div class="item">
                    <img src="images/GodOfWar_Slider.jpg" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br/>
        <!--------------------------Kết thúc Slider----------------------------------->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Brand</a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Trang chủ <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Giỏ hàng</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh mục <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Danh mục 1</a></li>
                                <li><a href="#">Danh mục 2</a></li>
                                <li><a href="#">Danh mục 3</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Apple</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Samsung</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm,danh mục,thương hiệu...">
                        </div>
                        <button type="submit" class="btn btn-default">Tìm kiếm</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> 7 - Items<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-cart" role="menu">
                                <li>
                                    <span class="item">
                        <span class="item-left">
                        <img src="images/GodOfWar_Slider.jpg" class="img img-responsive" width="120px" alt="" />
                        <span class="item-info">
                        <span>Đĩa game GOW 2018</span>
                                    <span>23$</span>
                                    </span>
                                    </span>
                                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="item">
                        <span class="item-left">
                        <img src="images/GodOfWar_Slider.jpg" class="img img-responsive" width="120px" alt="" />
                        <span class="item-info">
                        <span>Đĩa game GOW 2018</span>
                                    <span>23$</span>
                                    </span>
                                    </span>
                                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="item">
                        <span class="item-left">
                        <img src="images/GodOfWar_Slider.jpg" class="img img-responsive" width="120px" alt="" />
                        <span class="item-info">
                        <span>Đĩa game GOW 2018</span>
                                    <span>23$</span>
                                    </span>
                                    </span>
                                    <span class="item-right">
                        <button class="btn btn-xs btn-danger pull-right">x</button>
                        </span>
                                    </span>
                                </li>

                                <li class="divider"></li>
                                <li><a class="text-center" href="cart.php">Xem giỏ hàng</a></li>
                            </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding-0">
                <div class="vertical-menu">
                    <a href="index.php" class="active">Danh mục sản phẩm</a>
                    <a href="">Tai nghe</a>
                    <a href="danhmuc.php">Phụ kiện</a>
                    <a href="index.php">Ốp lưng</a>
                    <a href="index.php">Nút bấm</a>
                    <a href="index.php">Chuột</a>
                    <a href="index.php">Bàn phím</a>
                    <a href="index.php">Màn hình</a>
                </div>
                <br/>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                     Tin tức mới
                      </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 title-news">Game PC mới ra mắt thu hút nhất tháng 12</h5>
                            <small>12/12/2018</small>
                        </div>
                        <p class="mb-1 desc-news">Game PC mới ra mắt thu hút nhất tháng 12.Tạo nên cơn sốt đặc biệt cho những người đam mê dòng game phiêu lưu mạo hiểm,đẹp mắt</p>
                        <small>Game PC</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 title-news">Game PC mới ra mắt thu hút nhất tháng 12</h5>
                            <small>12/12/2018</small>
                        </div>
                        <p class="mb-1 desc-news">Game PC mới ra mắt thu hút nhất tháng 12.Tạo nên cơn sốt đặc biệt cho những người đam mê dòng game phiêu lưu mạo hiểm,đẹp mắt</p>
                        <small>Game PC</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 title-news">Game PC mới ra mắt thu hút nhất tháng 12</h5>
                            <small>12/12/2018</small>
                        </div>
                        <p class="mb-1 desc-news">Game PC mới ra mắt thu hút nhất tháng 12.Tạo nên cơn sốt đặc biệt cho những người đam mê dòng game phiêu lưu mạo hiểm,đẹp mắt</p>
                        <small>Game PC</small>
                    </a>
                   
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>
                      <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 hover-sanpham">
                       <a class="link-sanpham" href="detail-product.php">
                           <img src="images/GodOfWar_Slider.jpg" width="100%">
                           <p class="title-product">Đĩa game God of War 2018</p>
                           <p class="price">3.500.000 VNĐ</p>
                           <input type="submit" class="button-styling" name="dathang-submit" value="Đặt hàng">
                       </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container text-center">
            <hr />
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Danh mục 1</a></li>
                            <li><a href="#">Danh mục 2</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Web analytics</a></li>
                            <li><a href="#">Presentations</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Product Help</a></li>
                            <li><a href="#">Developer API</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="/">© 2018 Company Name.</a></li>
                        <li><a href="#">Thông tin dịch vụ</a></li>
                        <li><a href="#">Bản quyền</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>