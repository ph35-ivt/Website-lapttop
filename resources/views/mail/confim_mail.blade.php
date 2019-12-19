<h1>Đơn đặt hàng</h1>
<p>Order info</p>
<p>Customer name :{{$data['name']}}</p>
<p>Customer mail :{{$data['email']}}</p>
<p>Total: {{$order->total}}</p>
<h2>Chi tiết sản phẩm</h2>
<table id="mytable">
	<th>
		<td>name sp</td>
		<td>so luong</td>
	</th>
	@foreach($orderdetail as $item)
	<tr>
		<td>{{$item->name}}</td>
		<td>{{$item->soluong}}</td>
	</tr>
	@endforeach
</table>



