
@extends('Pages.collection')

@section('content')

<div class="card">
    <div class="card-header">
    <h5>Edit Registered Users</h5>
    <span>Search Customer, then Update information</span>
    </div>
    <div class="card-block">
    <div class="dt-responsive table-responsive">
    <table id="simpletable" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th class="th-sm">Customer names
                 </th>
                <th class="th-sm">Email
                </th>
                </th>
                <th class="th-sm">Phone
                </th>
                <th class="th-sm">Address
                </th>
                <th class="th-sm">Action
                </th>
                </tr>
        </thead>
    <tbody>

        @foreach ($cust as $item)
        <tr>
            <td>{{ $item->fname }} {{ " " }} {{ $item->mname }} {{ " " }}{{ $item->lname }} </td>

            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->address }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('edit_customer',$item->id) }}">  Edit</a>
            </td>
          </tr>
        @endforeach

    </tfoot>
    </table>
    </div>
    </div>
    </div>

@endsection



