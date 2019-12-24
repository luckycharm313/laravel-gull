@extends('layouts.app')
@section('extra_style')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js" ></script>
<script src="{{ asset('js/account.js') }}"></script>
@endsection
@section('content')
<div class="container">
  <form method="POST" action="{{ route('account') }}" id="accountForm">
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
        <input type="email" class="form-control"  placeholder="Work Email" id="work_email" name="work_email">
      </div>
      <div class="col-md-6 my-2">
        <label class="mb-2">Phone # :</label>
        <input type="text" class="form-control"  placeholder="Phone" id="phone" name="phone">
      </div>
    </div>
  </form>
</div>
@endsection