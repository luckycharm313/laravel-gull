@extends('layouts.app')
@section('extra_style')
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

@endsection
@section('content')
<div class="container">
  <form method="POST" action="{{ route('account') }}">
    @csrf
    <div class="row my-3">
      <div class="col-md-6 my-2">
        <label class="mb-2">First Name :</label>
        <input type="text" class="form-control"  placeholder="First Name" name="first_name">
      </div>
      <div class="col-md-6 my-2">
        <label class="mb-2">Last Name :</label>
        <input type="text" class="form-control"  placeholder="Last Name" name="last_name">
      </div>
    </div>
    <div class="row my-3">
      <div class="col-md-6 my-2">
        <label class="mb-2">Work Email :</label>
        <input type="email" class="form-control"  placeholder="Work Email" name="work_email">
      </div>
      <div class="col-md-6 my-2">
        <label class="mb-2">Phone # :</label>
        <input type="number" class="form-control"  placeholder="Phone" name="phone">
      </div>
    </div>
  </form>
</div>
@endsection