
@extends('Pages.collection')

@section('content')

<div class="card">
    <div class="card-header">
    <h5>Manage Registered Categories</h5>
    <span>Search Category, then Edit and Delete</span>
    </div>
    <div class="card-block">
    <div class="dt-responsive table-responsive">
    <table id="simpletable" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th class="th-sm">Category Name</th>
                <th class="th-sm">Category Description</th>
                <th class="th-sm">Action</th>
                </tr>
        </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('edit_category',$item->id) }}">  Edit</a>
                <a class="btn btn-danger" href="{{ route('delete_category',$item->id) }}">Delete</a>
            </td>

          </tr>
        @endforeach
    </tfoot>
    </table>
    </div>
    </div>
    </div>

@endsection
