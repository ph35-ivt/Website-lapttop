@extends('admin.main')
@section('content')
	
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Search
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
            <th>name</th>
            <th>phone</th>
            <th>payment</th>
            <th>Status</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($search as $tk)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$tk->name}}</span></td>
            <td><span class="text-ellipsis">{{$tk->phone}}</span></td>
            <td>
              @if($tk->payment==1)
              <span class="text-ellipsis">CASH</span>
              @else
              <span class="text-ellipsis">ATM</span>
              @endif
            </td>
            <td>
              @if($tk->status==1)
              <span class="text-ellipsis">Thanh toán</span>
              @else
              <span class="text-ellipsis">Chưa thanh toán</span>
              @endif
            </td>
            <td>
              <a class="btn" href="{{route('show-order',$tk->id)}}">
                <button type="submit"><i class="fas fa-scroll"></i></button>
              </a>
              <a class="btn" href="{{route('edit-order',$tk->id)}}">
                <button type="submit"><i class="fas fa-edit"></i></button>
              </a>
                @if(empty($tk->deleted_at))
                    <form style="padding-left: 13px" action="{{route('delete-order', $tk->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Bạn có muốn xóa không ?')" type="submit"><i style="width: 17px;color: #097cef" class="fas fa-trash-alt"></i></button>
                        
                      </form>
                @endif 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection