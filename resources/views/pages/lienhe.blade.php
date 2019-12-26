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
		    		<p><a href="{{route('trangchu')}}">Home</a> >>>> <a href="{{route('lienhe')}}">Liên hệ</a></p>
		    	    </div>
		    		<div class="clear"></div>
		    	</div>
		    	<div class="section group">
					<div class="cont-desc span_1_of_2">
						  <div class="product-details">	
								  <h2 style="color: red">Liên hệ :</h2>
								  <hr>								
								<div class="desc span_3_of_3">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.930744438672!2d108.20384721415881!3d16.06908324371179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219d22e47e813%3A0xea8b389f35d66c28!2zU-G7rWEgQ2jhu69hIExhcHRvcCDEkMOgIE7hurVuZyAtIGxlbWluaFNUT1JF!5e0!3m2!1svi!2s!4v1575131908900!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>					
								</div>
								<div class="clear"></div>
				 		 </div>
			
						  <script type="text/javascript">
					   		 $(document).ready(function () {
					       	 $('#horizontalTab').easyResponsiveTabs({
					       	     type: 'default', //Types: default, vertical, accordion           
					            width: 'auto', //auto or any width like 600px
					            fit: true   // 100% fit in a container
					       	 });
					  		  });
							   		</script>		
				  		<div class="content_bottom">
				    		<div class="heading">
				    		<h3>Related Products</h3>
				    		</div>
				    		<div class="see">
				    			<p><a href="{{route('trangchu')}}">See all Products</a></p>
				    		</div>
				    		<div class="clear"></div>
				    	</div>
					    <div class="section group">
							 @foreach($product1 as $pt)
									<div class="grid_1_of_4 images_1_of_4" style="width: 150px ;height: 320px">		
										<div class="price" style="border:none">
								       		<a href="preview.html"><img width="120px" height="130px" src="{{$pt->link}}" alt="" /></a>
												<h2>{{$pt->name}}</h2>
												<div class="price-details">
						 					<div class="price-number">
						 						<p><span class="rupees">Giá:{{number_format($pt->price)}}₫</span></p>
						 					</div>
						 					<div class="add-cart">								
						 						<h4><a href="giohang/{{$pt->id}}/{{$pt->slug}}.html" class="">Thêm giỏ hàng </a></h4>
						 					</div>
						 					<div class="clear"></div>
					 				     </div>	 
												 <div class="clear"></div>
										</div>
									</div>
							  @endforeach
								
						</div>
		        	</div>
					<div class="rightsidebar span_3_of_1">
						<h2>CATEGORIES</h2>
						<ul class="side-w3ls">
						     @foreach($categories as $ct)
						      <li><a href="sanpham/{{$ct->id}}/{{$ct->category_slug}}.html">{{$ct->name}}</a></li>
						      @endforeach
						</ul>
						</div>
		 		</div>
 	</div>
    </div>
 </div>
@endsection

