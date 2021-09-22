
@extends('Pages.collection')

@section('content')

<div class="card">
    <div class="card-header">
    <h5>Manage Registered Roles</h5>
    <span>Search Role, then Edit and Delete</span>
    </div>
    <div class="card-block">
    <div class="dt-responsive table-responsive">
    <table id="simpletable" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
        </thead>
    <tbody>


            @foreach ($data as $item)
            <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->slug }}</td>
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



