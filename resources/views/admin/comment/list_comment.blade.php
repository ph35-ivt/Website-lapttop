@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List Comment
    </div>
    <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">...</option>
                <option value="1">...</option>
                <option value="2">...</option>
                <option value="3">...</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search">
                <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
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
            <th>ID</th>
            <th>New ID</th>
            <th>User ID</th>
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
            <td><span class="text-ellipsis">{{$comment->new_id}}</span></td>
            <td><span class="text-ellipsis">{{$comment->user_id}}</span></td>
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
                        <button type="submit"><i style="width: 17px;color: #097cef" class="fas fa-trash-alt"></i></button>
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
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
