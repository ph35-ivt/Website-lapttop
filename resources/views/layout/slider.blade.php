<div class="header_slide">
    <div class="header_bottom_left">
        <div class="categories">
            <ul>
                <h3>Categories</h3> @foreach($categories as $ct)
                <li><a href="sanpham/{{$ct->id}}/{{$ct->slug}}.html">{{$ct->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="header_bottom_right">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" width="700px" height="380px" src="user/images/slider/banner.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" width="700px" height="380px" src="user/images/slider/banner1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" width="700px" height="380px" src="user/images/slider/banner2.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="clear"></div>
</div>