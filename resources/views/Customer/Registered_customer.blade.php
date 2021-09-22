@extends('Pages.collection')

@section('content')

<div class="container">

<br><br>
<table style="margin-top: 2cm; width: 80%" id="dtBasicExample" class="table table-striped table-bordered " cellspacing="0" width="100%">

    <thead>

      <tr>
        <th class="th-sm">Customer names

        </th>
        <th class="th-sm">Category
        </th>
        <th class="th-sm">Campany
        </th>
        </th>
        <th class="th-sm">Email
        </th>
    </th>
    <th class="th-sm">Phone
    </th>
    <th class="th-sm">Address
    </th>

      </tr>
    </thead>
    <tbody>
        @foreach ($cust as $item)
        <tr>
            <td>{{ $item->fname }} {{ " " }} {{ $item->mname }} {{ " " }}{{ $item->lname }} </td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->campany }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->address }}</td>
          </tr>
        @endforeach
    </tbody>

  </table>
</div>
  @endsection
