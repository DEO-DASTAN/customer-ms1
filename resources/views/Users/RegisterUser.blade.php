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
    <form method="post" action="{{ route('store_user') }}">
        @csrf
        <h4 class="sub-title"> Register New System User</h4>
    <div class="form-group row">
     <label class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-8">
    <input type="text"  name="fname" class="form-control">
    <span style="color: red">
        @error('fname')
            {{ $message }}
        @enderror
    </span>
    </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Middle Name</label>
       <div class="col-sm-8">
       <input type="text"  name="mname" class="form-control">
       <span style="color: red">
        @error('mname')
            {{ $message }}
        @enderror
    </span>
       </div>
       </div>


       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Last Name</label>
       <div class="col-sm-8">
       <input type="text"  name="lname" class="form-control">
       <span style="color: red">
        @error('lname')
            {{ $message }}
        @enderror
    </span>
       </div>
       </div>


       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label></label>
       <div class="col-sm-8">
       <input type="text"  name="email" class="form-control">
       <span style="color: red">
        @error('email')
            {{ $message }}
        @enderror
    </span>
       </div>
       </div>


       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone</label>
       <div class="col-sm-8">
       <input type="text"  name="phone" class="form-control">
       <span style="color: red">
        @error('phone')
            {{ $message }}
        @enderror
    </span>
       </div>
       </div>


       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Select User Role</label>
        <div class="col-sm-8">
        <select name="category_id" class="form-control">
            <option value="">Select User role</option>
            @foreach ($data as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-8">
           <input type="password" name="password" class="form-control">
           <span style="color: red">
               @error('address')
                   {{ $message }}
               @enderror
           </span>
           </div>
           </div>

        <button type="submit" class="btn btn-success">Register</button>
    </form>
    </div>

@endsection
