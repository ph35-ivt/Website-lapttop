<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
				  	 @foreach($categories as $ct)
				      <li><a href="sanpham/{{$ct->id}}/{{$ct->category_slug}}.html">{{$ct->name}}</a></li>
				      @endforeach
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	  <img src="user/images/slider/banner.png" alt="">
		            </div>
		   <div class="clear"></div>
		</div>