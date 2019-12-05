@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Product Detail
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th> ID</th>
            <th>Name</th>
            <th>Category ID</th>
            <th>Product_slug</th>
            <th>Content</th>
            <th>Price</th>
            <th>Link</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Create At</th>
            <th>Update At</th>
          </tr>
        </thead>
        <tbody>
	        <tr>
            <td><span class="text-ellipsis">{{$product->id}}</span></td>
            <td><span class="text-ellipsis">{{$product->name}}</span></td>
            <td><span class="text-ellipsis">{{$product->category_id}}</span></td>
            <td><span class="text-ellipsis">{{$product->product_slug}}</span></td>
            <td><span class="text-ellipsis">{{$product->content}}</span></td>
            <td><span class="text-ellipsis">{{$product->price}}</span></td>
            <td><span class="text-ellipsis"><img style="width: 60px" src="{{$product->link}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$product->quantity}}</span></td>
            <td>
                @if($product->status==0)
                    <span class="text-ellipsis">hết hàng</span>
                @else
                    <span class="text-ellipsis">còn hàng</span>
                @endif
            </td>
            <td><span class="text-ellipsis">{{$product->created_at}}</span></td>
            <td><span class="text-ellipsis">{{$product->updated_at}}</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection