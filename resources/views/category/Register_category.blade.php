@extends('Pages.collection')

@section('content')


<div class="card-block">

    @if (Session::has('success'))
    <div style="background-color: rgb(90, 15, 230)" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ Session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif



    <form style="height: 100%" method="post" action="{{ route('store_category') }}">
        <h2 style="tab-size: 1cm" class="sub-title"> Register Category</h2>
        @csrf
    <div class="form-group row">
     <label class="col-sm-2 col-form-label">Category Name</label>
    <div class="col-sm-7">
    <input type="text"  name="name" class="form-control">
    </div>
    </div>
      <span style="color: red">
          @error('name')
              {{ $message }}
          @enderror
      </span>

        <div class="form-group row">
         <label class="col-sm-2 col-form-label"> Category Description</label>
        <div class="col-sm-7">
        <input type="text" name="description" class="form-control">
        </div>
        </div>
        <span style="color: red">
            @error('description')
                {{ $message }}
            @enderror
        </span>

        <button type="submit" class="btn btn-success">Register</button>


    </select>
    </div>
    </div>


    </form>
    </div>

@endsection
