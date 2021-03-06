@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List Product
    </div>
    @if(Session::has('success'))
      <P style="color:#00CCFF">{{Session::get('success')}}</P>
    @endif
    <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
                            
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <form action="{{route('product-search')}}" method="GET">
                    @csrf
                      <input style="float: left;width: 150px;height: 28px;" type="text" class="input-sm form-control" placeholder=" Search" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                      <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="color: black">ID</th>
            <th style="color: black" style="color: black">Name</th>
            <th style="color: black">Price</th>
            <th style="color: black">Link</th>
            <th style="color: black">Quantity</th>
            <th style="width:30px;color: black">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listProducts as $product)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$product->id}}</span></td>
            <td><span class="text-ellipsis">{{$product->name}}</span></td>
            <td><span class="text-ellipsis">{{number_format($product->price)}}</span></td>
            <td><span class="text-ellipsis"><img style="width: 60px" src="{{$product->link}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$product->quantity}}</span></td>
            <td>
              <a class="btn" href="{{route('show-product',$product->id)}}">
                <button style="color: #0000EE" type="submit"><i class="fas fa-scroll"></i></button>
              </a>
              <a  class="btn" href="{{route('edit-product',$product->id)}}">
                <button style="color: red" type="submit"><i class="fas fa-edit"></i></button>
              </a>
                @if (empty($product->deleted_at))
                    <form style="padding-left: 13px" action="{{route('delete-product', $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Bạn có muốn xóa không ?')" type="submit"><i style="width: 17px; color: black" style="" class="fas fa-trash-alt"></i></button>
                      </form>
                @endif 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">            
            {{ $listProducts->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
