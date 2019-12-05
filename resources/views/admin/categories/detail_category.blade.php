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
            <th>Parent Category ID</th>
            <th>Name</th>
            <th>Category_slug</th>
            <th>Description</th>
            <th>Order</th>
            <th>Status</th>
            <th>Create At</th>
            <th>Update At</th>
          </tr>
        </thead>
        <tbody>
	        <tr>
            <td><span class="text-ellipsis">{{$category->id}}</span></td>
            <td><span class="text-ellipsis">{{$category->parent_category_id}}</span></td>
            <td><span class="text-ellipsis">{{$category->name}}</span></td>
            <td><span class="text-ellipsis">{{$category->category_slug}}</span></td>
            <td><span class="text-ellipsis">{{$category->description}}</span></td>
            <td><span class="text-ellipsis">{{$category->order}}</span></td>
            <td>
              @if($category->status==0)
                <a href="."><span class="text-ellipsis">ẩn</span></a>
                @else
                <a href="."><span class="text-ellipsis">hiện</span></a>
              @endif
            </td>
            <td><span class="text-ellipsis">{{$category->created_at}}</span></td>
            <td><span class="text-ellipsis">{{$category->updated_at}}</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection