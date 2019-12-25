@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List Order
    </div>
    @if(Session::has('success'))
      <P style="color:#00CCFF">{{Session::get('success')}}</P>
    @endif
    <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">---lọc đơn hàng---</option>
                <option value="1">Đã xử lý </option>
                <option value="2">Chưa xử lý</option>
                <option value="3">ATM</option>
                <option value="4">CASH</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <form action="{{route('order-search')}}" method="GET">
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
            <th style="color: black">Name</th>
            <th style="color: black">Phone</th>
            <th style="color: black">Payment</th>
            <th style="color: black">Status</th>
            <th style="width:30px;color: black">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listOrders as $order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$order->name}}</span></td>
            <td><span class="text-ellipsis">{{$order->phone}}</span></td>
            <td>
              @if($order->payment==1)
              <span class="text-ellipsis">CASH</span>
              @else
              <span class="text-ellipsis">ATM</span>
              @endif
            </td>
            <td>
              @if($order->status==1)
              <a style="border: 3px solid aqua;border-radius: 7px;background: aqua;"  href="">
                <span class="text-ellipsis">Đã xử lý</span></a>
              @else
              <a style="border: 3px solid bisque;border-radius: 7px;background: bisque;">
                <span class="text-ellipsis">Chưa xử lý</span></a>
              @endif
            </td>
            <td>
              <a class="btn" href="{{route('list-order')}}">
                <button style="color: #0000EE" type="submit"><i class="fas fa-sync"></i></button>
              </a>
              <a class="btn" href="{{route('show-order',$order->id)}}">
                <button style="color: red" type="submit"><i class="fas fa-scroll"></i></button>
              </a>
              <a class="btn" href="{{route('edit-order',$order->id)}}">
                <button style="color: #00DD00" type="submit"><i class="fas fa-edit"></i></button>
              </a>
                @if(empty($order->deleted_at))
                    <form style="padding-left: 13px" action="{{route('delete-order', $order->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Bạn có muốn xóa không ?')" type="submit"><i style="width: 17px;color: black" class="fas fa-trash-alt"></i></button>
                        
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
            {{ $listOrders->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
