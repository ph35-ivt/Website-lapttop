<section id="footer-top">
<h1 style="text-align: center;color: red; font-size: 30px;">
Tin Tức :
<hr width="200px" style="border: 2px solid green">
</h1>
<div class="container">
	<div class="row">
         @foreach($tintuc1 as $tt)
		<div class="col-md-6">
          <div class="card" style="width: 100%;">
          <div class="img-article ">
          <a href="">
          <img src="user/images/tintuc/img3.jpg" class="card-img-top img-thumbnail" alt="">
          </a>
         </div>
          <div class="card-body">
          <h5 class="card-title" style="font-size: 20px">Tin mới :</h5>
          <p class="card-text">{{$tt->title}}</p>
          <br>
          <br>
          <a href="#" class="btn btn-primary">Xem thêm</a>
          </div>
          </div>
         </div>
         @endforeach
	</div>
</div>
<table  style="width: 900px; margin: 0 auto;  text-align: center; font-weight: bold; font-size: 20px">
	<hr style="border: 2px solid green">
		<tr>
			<th><img style="width: 100px;height: 100px" src="user/images/slider/dangnhap.png" alt=""> </th>
			<th><img style="width: 100px;height: 100px" src="user/images/slider/fb.png" alt=""> </th>
			<th><img style="width: 100px;height: 100px" src="user/images/slider/message.png" alt=""> </th>
			<th><img style="width: 100px;height: 100px" src="user/images/slider/youtube.png" alt=""> </th>
			<th><img style="width: 100px;height: 100px" src="user/images/slider/baomat.png" alt=""> </th>
			<th><img style="width: 100px; height: 100px" src="user/images/slider/giaohang.png" alt=""> </th>
		</tr>
        
</table>
<style type="text/css">
	.img-article {
    overflow: hidden;
    position: relative;
}

.img-article img {
    width: 100%;
    height: 100%;
    -webkit-transition: transform .8s cubic-bezier(.44, .185, .575, .86);
    -moz-transition: transform .8s cubic-bezier(.44, .185, .575, .86);
    -o-transition: transform .8s cubic-bezier(.44, .185, .575, .86);
    transition: transform .8s cubic-bezier(.44, .185, .575, .86);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden
}
.card:hover .img-article img,
.news-content:hover .img-article img,
.dichvu_item:hover .img-article img,
.img_gioithieu:hover .img-article img,
.news_index .item:hover .img-article img
 {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1)
}
</style>
