@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List Comment
    </div>
    <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
                            
        </div>
        <div class="col-sm-4">
        </div>
        <div class="input-group">
                <form action="" method="GET">
                    @csrf
                      <input style="float: left;width: 150px;height: 28px;" type="text" class="input-sm form-control" placeholder=" Search" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                      <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
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
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Product ID</th>
            <th>Content</th>
            <th>Create At</th>
            <th>Update At</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listComments as $comment)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$comment->id}}</span></td>
            <td><span class="text-ellipsis">{{$comment->cm_name}}</span></td>
            <td><span class="text-ellipsis">{{$comment->cm_email}}</span></td>
            <td><span class="text-ellipsis">{{$comment->product_id}}</span></td>
            <td><span class="text-ellipsis">{{$comment->content}}</span></td>
            <td><span class="text-ellipsis">{{$comment->created_at}}</span></td>
            <td><span class="text-ellipsis">{{$comment->updated_at}}</span></td>
            <td>
              <a class="btn" href="{{route('edit-comment',$comment->id)}}">
                <button type="submit"><i class="fas fa-edit"></i></button>
              </a>
                @if(empty($comment->deleted_at))
                    <form style="padding-left: 13px" action="{{route('delete-comment', $comment->id)}}" method="POST">
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
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            {{ $listComments->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
