<div class="col-sm-6">
			<div class="your-order">
				<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
				<div class="your-order-body" style="padding: 0px 10px">
					<div class="your-order-item">								
						<div>
							@if(Session::has('cart'))
					    	@foreach($product_cart as $pt)
						<!--  one item	 -->
							<div class="media">
								<img width="20%" src="{{$pt['item']['link']}}" alt="" class="pull-left">
								<div class="media-body">
									<table width="350px" height="100px">
										<tr>
											<td>{{$pt['item']['name']}}</td>
											<td><a href="{{route('delcart',$pt['item']['id'])}}" id="success" class=" glyphicon glyphicon-trash "></a>
											<a href="{{route('editcart',$pt['item']['id'])}}" class="btn btn-primary">Cập nhật</a></td>
										</tr>
										<tr>
											<!-- <td colspan="2"><label for="">Số lượng:</label>
			                        			<input type="number" value="{{$pt['qty']}}" min=1 onchange="" style="width: 50px"></td> -->
										</tr>
										<tr>
											<td colspan="2">Đơn giá: {{number_format($pt['item']['price'])}} Đồng</td>
										</tr>
									</table>
									
								</div>
							</div>
							@endforeach
							@endif
						<!-- end one item -->
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="your-order-item">
						@if(Session::has('cart'))
						<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
						<div class="pull-right"><h5 class="color-black">${{number_format(Session('cart')->totalPrice)}}</h5></div>
						<div class="clearfix"></div>
						@endif
					</div>
				</div>
				<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
				
				<div class="your-order-body">
					<ul class="payment_methods methods">
						<li class="payment_method_bacs">
						
							<input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="0" checked="checked" data-order_button_text="">
							<label for="payment_method_bacs">Tiền mặt</label>
							<div class="payment_box payment_method_bacs" style="display: block;">
								Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
							</div>						
						</li>

						<li class="payment_method_cheque">
							<input id="payment_method_cheque"  type="radio" class="input-radio" name="payment" value="1" data-order_button_text="">
							<label for="payment_method_cheque">Online </label>
							<div class="payment_box payment_method_cheque" style="display: none;">
								Chuyển tiền đến tài khoản sau:
								<br>- Số tài khoản: 123 456 789
								<br>- Chủ TK: Nguyễn A
								<br>- Ngân hàng ACB, Chi nhánh TPHCM
							</div>						
						</li>
						
					</ul>
				</div>

				<div class="text-center"><button type="submit"  class="btn btn-outline-success">  Đặt hàng <i class="glyphicon glyphicon-chevron-right"></i></button></div>
			</div> <!-- .your-order -->
		</div>