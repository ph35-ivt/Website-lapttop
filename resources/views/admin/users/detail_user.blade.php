@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Detail User
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th> ID</th>
            <th>Name</th>
            <th>email</th>
            <th>level</th>
            <th>Create At</th>
            <th>Update At</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="text-ellipsis">{{$user->id}}</span></td>
            <td><span class="text-ellipsis">{{$user->name}}</span></td>
            <td><span class="text-ellipsis">{{$user->email}}</span></td>
            <td>
              @if($user->level==0)
                  <span class="text-ellipsis">User</span>
              @else
                  <span class="text-ellipsis">Admin</span>
              @endif
            </td>
            <td><span class="text-ellipsis">{{$user->created_at}}</span></td>
            <td><span class="text-ellipsis">{{$user->updated_at}}</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
