@extends('Pages.collection')

@section('content')



<div class="page-body">
    <div class="row">
    <div class="col-sm-12">

    <div class="card">
    <div class="card-header">
    <h5>Assign Permissions to Roles</h5>
    <span> </span>
    </div>

    @if (Session::has('success'))
    <div style="background-color: rgb(90, 15, 230)" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ Session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    @endif


    <div class="card-block">
    <div class="dt-responsive table-responsive">
        <form method="post" action="{{ route('store_PermToRole') }}">
        @csrf
    <table id="custom-btn" class="table table-striped table-bordered nowrap">
    <thead>
    <tr>
    <th>Select Role </th>
    <th>Select Permission</th>


    </tr>
    </thead>
    <tbody>

    <tr>
    <td>
        <div class="form-group">
            <div class="col-md-5">
        <select class="custom-select" name="role" id="">
            @foreach ($data as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
       </div>
    </div>
</td>
    <td>
        <div class="form-group">
            <select class="custom-select" name="permission" id="">

                @foreach ($permissions as $perm)
                <option value="{{ $perm->id }}">{{ $perm->name }}</option>
                @endforeach


            </select>
           </div>
    </td>
    </tr>

    </tbody>
    </table>
    <button type="submit" class="btn btn-success">Assign</button>
</form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>

@endsection
