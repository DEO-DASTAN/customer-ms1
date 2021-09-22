@extends('Pages.collection')

@section('content')

<div class="card">
    <div class="card-header">
    <h5>Manage Registered Users</h5>
    <span>In this section, you can Edit user information and Delete user</span>

    @if (Session::has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ Session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif


    </div>
    <div class="card-block">
    <div class="dt-responsive table-responsive">
    <table id="simpletable" class="table table-striped table-bordered nowrap">
    <thead>
    <tr>
    <th>Names</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Reset Password</th>
    <th>Edit</th>
    <th>Delete</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
        <td>{{ $item->fname }}{{ " " }}{{ $item->mname }}{{ " " }}{{ $item->lname }}{{ " " }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->phone }}</td>

        <td ><a style="color: rgb(37, 2, 235)" class= "btn btn-primary btn-sm" href="{{ route('resert_password',$item->id) }}">  Reset Password</a></td>
        <td ><a style="color: rgb(37, 2, 235)" class= "feather icon-edit" href="">  Edit</a></td>
        <td><a style="color: rgb(255, 1, 1)" class= "feather icon-delete" class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach
    </tfoot>
    </table>
    </div>
    </div>
    </div>

@endsection


