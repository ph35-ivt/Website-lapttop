
<h2>Cảm ơn bạn {{$order->name}} đã đặt thành công tại cửa hàng của chúng tôi</h2>
<h3>Chúng tôi sẽ sắp xếp giao đơn hàng cho bạn nhanh nhất. Dưới đây là thông tin chi tiết đơn hàng của bạn</h3>

<h4>Mã đơn hàng: <i>{{$order->id}}</i> </h4>
<h4>Người nhận hàng: <i>{{$order->name}}</i> </h4>
<h4>Địa chỉ giao hàng: <i>{{$order->address}}</i> </h4>
<h4>Địa chỉ giao hàng: <i>{{$order->phone}}</i> </h4>
<h4>Hình thức thanh toán: <i>{{$order->payment}}</i> </h4>


<table class="table table-hover" border="1" style="border-collapse: collapse;">
	<thead>
		<tr>
			<th>#</th>
			<th>Sản Phẩm</th>
			<th>Số Lượng</th>
			<th>Giá</th>

		</tr>
	</thead>
	<tbody>
		@foreach($order->order_details as $ord)
		<tr>
			<td>{{$ord->id}}</td>
			<td>{{$ord->products->name}}</td>
			<td>{{$ord->quantity}}</td>
			<td>{{number_format($ord->products->price)}} vnđ</td>

		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<td colspan="3" style="text-align: right;">Tổng Tiền</td>
		<td>{{number_format($order->total)}} vnđ</td>
	</tfoot>
</table>
