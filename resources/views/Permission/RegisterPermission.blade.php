@extends('Pages.collection')

@section('content')


<div class="card-block">

    @if (Session::has('success'))
    <br><br>
    <div style="background-color: rgb(90, 15, 230)" class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ Session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif



    <form style="height: 100%" method="post" action="{{ route('store_permission') }}">
        <h2 style="tab-size: 1cm" class="sub-title"> Register System Permission</h2>
        @csrf
    <div class="form-group row">
     <label class="col-sm-2 col-form-label">Permission Name</label>
    <div class="col-sm-7">
    <input type="text"  name="name" class="form-control">
</div>
<span style="color: red">
    @error('name')
        {{ $message }}
    @enderror
</span>
    </div>


        <div class="form-group row">
         <label class="col-sm-2 col-form-label"> Permission slug</label>
        <div class="col-sm-7">
        <input type="text" name="slug" class="form-control">
        </div>
        <span style="color: red">
            @error('slug')
                {{ $message }}
            @enderror
        </span>
        </div>


        <button type="submit" class="btn btn-success">Register</button>


    </select>
    </div>
    </div>


    </form>
    </div>

@endsection
