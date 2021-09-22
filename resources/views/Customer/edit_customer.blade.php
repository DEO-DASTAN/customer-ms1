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
    <form method="post" action="{{ route('update_customer') }}">
        <input value="{{ $data->id }}" name="id" type="hidden">
        @csrf
        <h4 class="sub-title"> Edit Customer Details</h4>
    <div class="form-group row">
     <label class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-8">
    <input type="text"  value="{{ $data->fname }}" name="fname" class="form-control">
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
       <input type="text" value="{{ $data->mname }}" name="mname" class="form-control">
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
       <input type="text" value="{{ $data->lname }}"  name="lname" class="form-control">
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
       <input type="text" value="{{ $data->email}}"  name="email" class="form-control">
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
       <input type="text"  value="{{ $data->phone }}"  name="phone" class="form-control">
       <span style="color: red">
        @error('phone')
            {{ $message }}
        @enderror
    </span>
       </div>
       </div>


       <div class="form-group row">
        <label class="col-sm-2 col-form-label">Campany</label>
       <div class="col-sm-8">
       <input type="text" value="{{ $data->campany }}"  name="campany" class="form-control">
       <span style="color: red">
        @error('campany')
            {{ $message }}
        @enderror
    </span>
       </div>
       </div>



        <div class="form-group row">
         <label class="col-sm-2 col-form-label"> Adress</label>
        <div class="col-sm-8">
        <input type="text" value="{{ $data->address }}" name="address"  class="form-control">
        <span style="color: red">
            @error('address')
                {{ $message }}
            @enderror
        </span>
        </div>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
    </div>

@endsection
